<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FacNotificationController extends Controller
{
    public function notification()
    {
        return view('faculty.notification');
    }
}
