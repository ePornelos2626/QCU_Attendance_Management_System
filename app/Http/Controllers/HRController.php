<?php

namespace App\Http\Controllers;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

use Illuminate\Http\Request;

class HRController extends Controller
{
    public function index()
    {




        return view('hr.index', [
    
        ]);
    }
}
