<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;
use App\Models\Secretary;
use App\Notifications\AnnouncementPHNotification;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\URL;
use App\Models\User;

class PHAnnouncementController extends Controller
{
    public function announcement()
    {
        $user = auth()->user();

        $department = auth()->user()->programhead->departmentID;

        // dd($department);

        $secretary = Secretary::where('departmentID', $department)
        ->get();

        $announcment = Announcement::where('announcement_to', 'Secretary')
        ->where('departmentID', $department)
        ->get();


        return view('programhead.announcement', [
            'user' => $user,
            'secretary' => $secretary,
            'announcement' => $announcment
        ]);
    }

    public function create_announcement_ph(Request $request)
    {
        // dd($request);

        $department = auth()->user()->programhead->departmentID;

        $str = \Str::random(3);

        $token = \Str::random(60);
        
        $user = auth()->user();

        $sender = $user->name;
        
        $id = $user->id;

        $attachments = time() . '-' . $str . '.' .
        $request->attachment->extension();
        $request->attachment->move(public_path('announcement_files'), $attachments);

        $announcment = Announcement::create([
            'userID' => $id,
            'accesskey' => $token,
            'subject' => $request->subject,
            'sender' => $sender,
            'attachment' => $attachments,
            'announcement_to' => 'Secretary',
            'receiver' => $request->secretary,
            'announcement_description' => $request->announcement,
            'departmentID' => $department
        ]);

        
        $link = URL::to('Secretary/Notification/'.$announcment->id.'/'.$announcment->accesskey.'/announcement' );

        $datas = [
            'subject' => $request->subject,
            'name' => $sender,
            'link' => $link
        ];

        //receiver
        $receiver = $request->secretary;
        $user = User::where('id', $receiver)
        ->first();
        
        Notification::send($user, new AnnouncementPHNotification($datas));

        flash()->success('Success','Announcement has been posted successfully !');

        return redirect()->back();


    }

  
}
