<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PHMonthlyReportController extends Controller
{   

    public function monthly_report()
    {
        return view('programhead.monthly_report');
    }

}
