<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PHCoursesController extends Controller
{
    public function bsa_course()
    {
        return view('programhead.courses.bsa_ph');
    }

    public function bse_course()
    {
        return view('programhead.courses.bse_ph');
    }

    public function bsece_course()
    {
        return view('programhead.courses.bsece_ph');
    }

    public function bsit_course()
    {
        return view('programhead.courses.bsit_ph');
    }

    public function bsie_course()
    {
        return view('programhead.courses.bsie_ph');
    }

}
