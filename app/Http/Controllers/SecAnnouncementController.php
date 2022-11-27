<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SecAnnouncementController extends Controller
{
    public function announcement()
    {
        return view('secretary.announcement');
    }
}
