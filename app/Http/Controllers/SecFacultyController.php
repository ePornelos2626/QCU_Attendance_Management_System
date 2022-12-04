<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SecFacultyController extends Controller
{
    public function faculty_blade()
    {

        $user = auth()->user();


        return view('secretary.faculty', [
            'user' => $user
        ]);
    }
}
