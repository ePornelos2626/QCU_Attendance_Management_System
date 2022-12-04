<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PHMonthlyReportController extends Controller
{   

    public function monthly_report()
    {
        $user = auth()->user();
        return view('programhead.monthly_report', [
            'user' => $user
        ]);
    }

}
