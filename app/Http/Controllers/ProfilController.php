<?php

namespace App\Http\Controllers;

use App\Models\profil;
use App\Http\Requests\StoreprofilRequest;
use App\Http\Requests\UpdateprofilRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpKernel\Profiler\Profile;

class ProfilController extends Controller
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

    public $table = 'profils';
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        profil::insert('insert into profil (id, email, password, update_at, created_at) values (20, 50, 100, 0, 0)', [1, 'Dayle']);

        profil::select("select * from profils where email = '$email' ");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreprofilRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreprofilRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function show(profil $profil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function edit(profil $profil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateprofilRequest  $request
     * @param  \App\Models\profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateprofilRequest $request, profil $profil)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function destroy(profil $profil)
    {
        //
    }

    public function simpandata(Request $request)
    {
        $user = profil::create([
            'name'=> $request->name,
            'email' => $request->email,
            'password' => $request->password,
            
        ]);
        return view('homepagesudahlogin');
    }

    public function login()
    {
        return view("login");
    }

    public function masuk(Request $request)
    {
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);

        $infologin =[
            'email'=> $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($infologin)){//kalo kamu bertanyea tanyea tentang ini, ini teh ceritanya buat klo misalnya datanya engga ada di database tidak bisa masuk
            return 'sukses';
        }else{
            return redirect('login')->withErrors('Username atau Password yang Anda Masukkan tidak valid!');
        }

        return view('homepagesudahlogin');
    }
}
