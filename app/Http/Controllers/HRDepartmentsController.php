<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HRDepartmentsController extends Controller
{
    public function bsa_department()
    {
        return view('hr.courses.bsa_ph');
    }

    public function bse_department()
    {
        return view('hr.courses.bse_ph');
    }

    public function bsece_department()
    {
        return view('hr.courses.bsece_ph');
    }

    public function bsit_department()
    {
        return view('hr.courses.bsit_ph');
    }

    public function bsie_department()
    {
        return view('hr.courses.bsie_ph');
    }

}
