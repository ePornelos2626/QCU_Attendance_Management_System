<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HRNotificationController extends Controller
{
    public function notification_blade()
    {
        return view('hr.notification');
    }
}
