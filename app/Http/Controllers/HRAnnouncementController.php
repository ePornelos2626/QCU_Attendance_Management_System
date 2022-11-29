<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;

class HRAnnouncementController extends Controller
{
    public function announcement()
    {
        $user = auth()->user();
        $id = $user->id;

        $announcement = Announcement::where('userID', $id)
        ->get();

        return view('hr.announcement', [

            'announcement' => $announcement

        ]);
    }

    public function create_announcement(Request $request)
    {
        // dd($request);

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
            'department' => $request->department,
            'to_user' => $to_user,
            'attachment' => $attachments
        ]);

        flash()->success('Success','Announcement has been posted successfully !');

        return redirect()->route('announcement_hr.show');
    }
}
