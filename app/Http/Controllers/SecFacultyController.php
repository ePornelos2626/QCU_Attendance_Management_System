<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SecFacultyController extends Controller
{
    public function faculty_blade()
    {
        return view('secretary.faculty');
    }
}
