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


    public function manage_faculty($department)
    {

        $faculty = Faculty::where('department', $department)
        ->get();

     
         return view('hr.manage_faculty', [

            'department' => $department,
            'faculty' => $faculty
            
         ]);
    }

    public function create_faculty(Request $request)
    {   

        // dd($request);

        // $showpass = $request->passwordshow;
        $email = $request->email;
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
            'department' => $request->department,
            'faculty_email' => $request->email,
            'faculty_permission' => 1
            // 'faculty_qr' => $facultyqr
        ]);

        // Mail::to($email)->send(new AccountMail($data));






        flash()->success('Success','Faculty Record has been created successfully !');
       
        return redirect()->route('manage_faculty.show', $request->department );

        // return redirect()->route(' hr.index', [
        //     'accountQR' => $accountQR
        // ]);

    }

}
