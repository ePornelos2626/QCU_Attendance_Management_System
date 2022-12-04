<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;
use App\Notifications\AnnouncementHRNotification;
use Illuminate\Support\Facades\Notification;
use App\Models\ProgramHead;
use App\Models\User;
use Illuminate\Support\Facades\URL;

class HRAnnouncementController extends Controller
{
    public function announcement()
    {
        $user = auth()->user();
        $id = $user->id;

        $announcement = Announcement::where('userID', $id)
        ->get();

        $programhead = ProgramHead::all();

        return view('hr.announcement', [

            'announcement' => $announcement,
            'programhead' => $programhead

        ]);
    }

    public function announcement_item($id, $key)
    {
        $user = auth()->user();
        $id = $user->id;

        $announcement = Announcement::where('id', $id)
        ->first();

        return view('hr.announcement-item', [

            'announcement' => $announcement

        ]);
    }

    public function create_announcement(Request $request)
    {
        //  dd($request);

        $str = \Str::random(3);

        $token = \Str::random(60);
        
        $user = auth()->user();

        $to_user = $user->name;
        
        $id = $user->id;

        $attachments = time() . '-' . $str . '.' .
        $request->attachment->extension();
        $request->attachment->move(public_path('announcement_files'), $attachments);

        $announcment = Announcement::create([
            'userID' => $id,
            'accesskey' => $token,
            'subject' => $request->subject,
            'departmentID' => $request->department,
            'sender' => $to_user,
            'attachment' => $attachments,
            'announcement_to' => 'Program Head',
            'receiver' => $request->programhead,
            'announcement_description' => $request->announcement
        ]);

   

        $link = URL::to('Program_Head/Notification/'.$announcment->id.'/'.$announcment->accesskey.'/announcement' );

        //data
        $datas = [
            'subject' => $request->subject,
            'name' => $to_user,
            'link' => $link
        ];

     
        //receiver
        $receiver = $request->programhead;
        $user = User::where('id', $receiver)
        ->first();

        Notification::send($user, new AnnouncementHRNotification($datas));


        flash()->success('Success','Announcement has been posted successfully !');

        return redirect()->route('announcement_hr.show');
    }
}
