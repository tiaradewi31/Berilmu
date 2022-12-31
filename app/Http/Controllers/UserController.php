<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    protected $redirectTo = '/password/verify';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // user::insert('insert into users (id, username, email, password, update_at, created_at) values (20, 50, 100, 0, 0)', [1, 'Dayle']);

        // user::select("select * from users where email = 'email' ");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserRequest  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }

    public function simpandata(Request $request)
    {
        $user = user::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            
        ]);
        return view('homepagesudahlogin');
    }

    /*public function panggildata(Request $request)
    {
        $user = profil::select([
            'email' => $request->email,
            'password' => $request->password,
            
        ]);
        return view('homepagesudahlogin');
    }*/

    /*public function login(){
        return view('login');
    }*/
    // public function panggildata(Request $request){
      
    //     if($user = Auth::attempt([
    //         'email' => ('email'),
    //         'password' => ('password')
    //     ])){
    //         return view('homepagesudahlogin');
    //     }else{
    //         return "Maaf email atau password yang anda masukan tidak sesuai.";
    //     }
        //return view('homepagesudahlogin');
        /*if (Auth::attempt(['email' => 'email', 'password' => 'password'])) {
            return view('homepagesudahlogin');
        }else{
            return "Maaf email atau password yang anda masukan tidak sesuai.";
        }*/
    //}
}
