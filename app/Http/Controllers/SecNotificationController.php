<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SecNotificationController extends Controller
{
    public function notification_blade()
    {
        $user = auth()->user();

        return view('secretary.notification', [
            'user' => $user
        ]);
    }

    public function notification_annoucementReadSec($id, $key, $notid)
    {
      

        return view('secretary.notifcations_pages.announcement');
    }

    public function notification_annoucementSec($id, $key)
    {

        
        return view('secretary.notifcations_pages.announcement');
    }
}
