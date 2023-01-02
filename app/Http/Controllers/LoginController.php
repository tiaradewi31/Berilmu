<?php

namespace App\Http\Controllers;

// use App\Http\Controllers\user;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function Authenticate(Request $request)
    {
        
        // user::select("select * from users where email = 'email' ");

        $credentials = $request->validate([
            'email' => $request->email,
            'password' => $request->password,
            
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return view('homepage');
        }

        Session::flash('status', 'failed');
        Session::flash('message', 'login wrong!');

        return view('login');
    }
}
