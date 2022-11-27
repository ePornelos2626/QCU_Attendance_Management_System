<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FacClassChedController extends Controller
{
    public function class_schedule()
    {
        return view('faculty.class_schedule');
    }
}
