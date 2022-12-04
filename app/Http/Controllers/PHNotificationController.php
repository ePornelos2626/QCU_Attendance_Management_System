<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;
class PHNotificationController extends Controller
{
    public function notification_blade()
    {
        $user = auth()->user();

        return view('programhead.notification', [
            'user' => $user
        ]);
    }

    public function notification_annoucementRead($id, $key, $notid)
    {
        $user = auth()->user();
        $ids = auth()->user()->id;
     


        $aid = auth()->user()->unreadNotifications
            ->where('id', $notid)
            ->first()
            ->markAsRead();


        // $aid = auth()->user()->unreadNotifications
        // ->markAsRead();



        $announcement = Announcement::where('id', $id)
        ->first();


        return view('programhead.notifications_pages.announcement' , [
            'user' => $user,
            'announcement' => $announcement
        ]);
    }

    public function notification_annoucement($id, $key)
    {
        $user = auth()->user();
        $ids = auth()->user()->id;
     


 


        // $aid = auth()->user()->unreadNotifications
        // ->markAsRead();



        $announcement = Announcement::where('id', $id)
        ->first();


        return view('programhead.notifications_pages.announcement' , [
            'user' => $user,
            'announcement' => $announcement
        ]);
    }
}
