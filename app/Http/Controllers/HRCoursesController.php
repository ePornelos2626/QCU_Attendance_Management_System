<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Faculty;
use App\Models\User;
use App\Models\Role;
use App\Models\Roles;
use RealRashid\SweetAlert\Facades\Alert;
use Spatie\Permission\Traits\HasRoles;
use DB;
use Hash;
use App\Mail\AccountMail;
use Illuminate\Support\Facades\Mail;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class HRCoursesController extends Controller
{
    public function bsa_course()
    {
        return view('hr.courses.bsa_ph');
    }

    public function bse_course()
    {
        return view('hr.courses.bse_ph');
    }

    public function bsece_course()
    {
        return view('hr.courses.bsece_ph');
    }

    public function bsit_course()
    {
        return view('hr.courses.bsit_ph');
    }

    public function bsie_course()
    {
        return view('hr.courses.bsie_ph');
    }

    public function manage_faculty($courses)
    {

        if($courses == "BSA")
        {
            $course = 2;
        }
        elseif ($courses == "BSE")
        {
            $course = 5;
        }
        elseif ($courses == "BSECE")
        {
            $course = 1;
        }
        elseif ($courses == "BSIT")
        {
            $course = 0;
        }
        elseif ($courses == "BSIE")
        {
            $course = 3;
        }


        $faculty = Faculty::where('courseID', $course)
        ->get();

     
         return view('hr.manage_faculty', [

            'courses' => $courses,
            'faculty' => $faculty
            
         ]);
    }


    public function create_faculty(Request $request)
    {   

        $email = $request->email;


        if($request->courses == "BSA")
        {
            $course = 2;
        }
        elseif ($request->courses == "BSE")
        {
            $course = 5;
        }
        elseif ($request->courses == "BSECE")
        {
            $course = 1;
        }
        elseif ($request->courses == "BSIT")
        {
            $course = 0;
        }
        elseif ($request->courses == "BSIE")
        {
            $course = 3;
        }




        // dd($dept);
        


        // dd($request);

        // $showpass = $request->passwordshow;
       
        // $name = $request->name;

        // $data = [
        //         'name' => $request->name,
        //         'email' => $request->email,
        //         'username' => $request->username,
        //         'password' =>  $request->passwordshow
        //         ];

        // $jsonData = json_encode($data);

        // $accountQR = QrCode::format('png')->size(200)->style('square')->generate($jsonData);

        // $custom_png = 'data:image/' . 'png' . ';base64,' . base64_encode($accountQR);

    
        // $base64  = base64_encode($accountQR);

        // dd($custom_png);

        // $base64  = base64_encode($accountQR);
 

       
        // $accountQR->move(public_path('faculty_qr'));


        // $facultyqr = time() . '-' . 'heys' . '.' .
        // $accountQR->extension();
        // $accountQR->move(public_path('faculty_qr'), $facultyqr);







        $user = User::create([
            'username' => $request->username,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $user->roles()->sync($request->role);

    
        
        // $accountQR = QrCode::format('svg')->size(200)->style('square')->generate([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'username' => $request->username,
        //     'password' =>  $request->passwordshow
        // ]);


        $faculty = Faculty::create([
            'userID' => $user->id,
            'courseID' => $course,
            'faculty_email' => $request->email,
            'faculty_permission' => 1
            // 'faculty_qr' => $facultyqr
        ]);

        // Mail::to($email)->send(new AccountMail($data));






        flash()->success('Success','Faculty Record has been created successfully !');
       
        return redirect()->route('manage_faculty.show', $request->courses );

        // return redirect()->route(' hr.index', [
        //     'accountQR' => $accountQR
        // ]);

    }


}
