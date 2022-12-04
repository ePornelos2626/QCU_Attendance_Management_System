<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SecAnnouncementController extends Controller
{
    public function announcement()
    {
        $user = auth()->user();

        return view('secretary.announcement', [
            'user' => $user
        ]);
    }
}
