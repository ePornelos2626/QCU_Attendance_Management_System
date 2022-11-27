<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HRAnnouncementController extends Controller
{
    public function announcement()
    {
        return view('hr.announcement');
    }
}
