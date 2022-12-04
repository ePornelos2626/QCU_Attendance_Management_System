<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PHAnnouncementController extends Controller
{
    public function announcement()
    {
        $user = auth()->user();

        return view('programhead.announcement', [
            'user' => $user
        ]);
    }

  
}
