<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class ProgramHeadController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        $role = auth()->user()->roles->first()->name;
        


        $message = 'sup';
        
        $qrsample = QrCode::format('svg')->size(200)->style('square')->generate($message);

        return view('programhead.index', [
            'qrsample' => $qrsample,
            'role' => $role,
            'user' => $user
        ]);
    }




}
