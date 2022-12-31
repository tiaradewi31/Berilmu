<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function Authenticate(Request $request)
    {
        Auth::check("select * from users where email = 'email' ");
        // user::select("select * from users where email = 'email' ");

        $credentials = $request->validate([
            'email' =>['required', 'email'],
            'password'=>['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return view('homepagesudahlogin');
        }

        Session::flash('status', 'failed');
        Session::flash('message', 'login wrong!');

        return view('login');
    }
}
