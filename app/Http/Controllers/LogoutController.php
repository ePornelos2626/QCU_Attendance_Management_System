<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LogoutController extends Controller
{
    public function logoutUser() {
        Session::flush();
        Auth::logout();

        return redirect('user_login');
    }
}
