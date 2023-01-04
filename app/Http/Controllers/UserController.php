<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreUserRequest;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\UpdateUserRequest;



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
    public function show()
    {
        return view('register');
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

    // public function simpandata(Request $request)
    // {
    //     $user = user::create([
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'password' => $request->password,
            
    //     ]);
    //     return view('homepagesudahlogin');
    // }

    // public function homepage()
    // {
    //     return view('homepage');
    // }

    public function simpandata(Request $request)
    {

        $request->validate([
            // 'name' => $request->name,
            'name' => 'required|max:255|unique:users,name',
            // 'email' => $request->email,
            'email' => ['required', 'email', 'max:255', 'unique:users,email'],
            // 'password' => $request->password,
            'password' => ['required'],
            
        ]);
        // if ($request->fails()) {
        //     return redirect('/Register')->withErrors($request)->withInput();
        // }

        // $user = User::where('name', $request->name)->first();
        // if (!$user || !Hash::check($request->email, $user->email)) {
        //     Session::flash('status', 'failed');
        //     Session::flash('message', 'Username or Email has been used!');
        //     return redirect('register');
        // }
        // auth()->login($user);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect('/login');

        // $user = [
        //     'name' => $request->input('name'),
        //     'email' => $request->input('email'),
        //     'password' => $request->input('password'),
        // ];
        // User::create($user);
        // return redirect('/homepage');
    }

    public function profil()
    {
        $user = User::find(Auth::user()->id);

        return view('profil')->with('user', $user);
    }

}

