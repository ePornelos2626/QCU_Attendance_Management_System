<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PerformLoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
 

        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login');
    }

    public function perform(PerformLoginRequest $request)
    {

    
        $this->loginUser($request);
        return $this->authenticated();

    }

    public function loginUser($request) {


      

        $credentials = $request->getCredentials();
        if(!Auth::validate($credentials)) {
            return redirect()->to('login')->withErrors(trans('auth.failed'));
        }
        $user = Auth::getProvider()->retrieveByCredentials($credentials);
        return Auth::login($user);

    }

    protected function authenticated()
    {
        return redirect()->intended();
    }


}
