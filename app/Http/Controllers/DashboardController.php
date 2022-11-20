<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {

        $code = auth()->user()->roles->first()->slug ;

   

        if($code == "admin")
        {
 
            return redirect()->route('admin.index');
        }

        
        if($code == "program head")
        {
    
            return redirect()->route('programhead.index');
        }

             
        if($code == "secretary")
        {
    
            return redirect()->route('secretary.index');
        }

        if($code == "faculty")
        {
    
            return redirect()->route('faculty.index');
        }

        if($code == "hr")
        {
    
            return redirect()->route('hr.index');
        }

        if($code == "student")
        {
    
            return redirect()->route('student.index');
        }
    }
}
