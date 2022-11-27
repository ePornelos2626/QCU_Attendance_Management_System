<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SecNotificationController extends Controller
{
    public function notification_blade()
    {
        return view('secretary.notification');
    }
}
