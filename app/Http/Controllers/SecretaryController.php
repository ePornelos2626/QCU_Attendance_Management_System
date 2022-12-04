<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SecretaryController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        return view('secretary.index', [
            'user' => $user
        ]);
    }
}
