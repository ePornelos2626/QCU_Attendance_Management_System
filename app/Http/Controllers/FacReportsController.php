<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FacReportsController extends Controller
{
    public function reports_blade()
    {
        return view('faculty.reports');
    }
}
