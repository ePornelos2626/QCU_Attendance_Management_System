<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PHNotificationController extends Controller
{
    public function notification_blade()
    {
        return view('programhead.notification');
    }
}
