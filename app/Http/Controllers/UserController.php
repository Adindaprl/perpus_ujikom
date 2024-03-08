<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('ebook.index');
    }

    public function registerPeminjam (Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required',
            'email'=> 'required',
            'namaLengkap' => 'required',
            'alamat' => 'required',
        ]);
        User::create([
            'email' => $request->email,
            'namaLengkap'=> $request->namaLengkap,
            'username'=> $request->username,
            'password'=> Hash::make($request->password),
            'alamat' => $request->alamat,
            'role' => "Peminjam"
        ]);
        return redirect('/landing');
    }

    public function registerPetugas (Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required',
            'email'=> 'required',
            'namaLengkap' => 'required',
            'alamat' => 'required',
        ]);
        User::create([
            'user_id' => Pinjam::latest()->first()->id,
            'email' => $request->email,
            'name'=> $request->namaLengkap,
            'username'=> $request->username,
            'password'=> Hash::make($request->password),
            'alamat' => $request->alamat,
            'role' => "Petugas"
        ]);

    }
    public function login(){
        return view ('ebook.login');
    }

    public function auth(Request $request)
    {
        $request->validate([
            'username' => 'required|exists:users,username',
            'password' => 'required',
        ], [
            'username.exists' => 'username ini belum tersedia',
            'username.required' => 'username harus diisi',
            'password.required' => 'password harus diisi',
        ]);
       $user = $request->only('username', 'password');
        if (Auth::attempt($user)) {
            return redirect('/landing');
        } else {
            return redirect('/login')->with('error', 'Gagal login silahkan cek dan coba lagi');
        }
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(buku $buku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(buku $buku)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, buku $buku)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(buku $buku)
    {
        //
    }
}
