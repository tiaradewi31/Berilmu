<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function show()
    {
        $users = user::all();
        return view('profil')->with('users', $users);
    }
}
