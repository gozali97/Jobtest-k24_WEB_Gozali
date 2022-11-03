<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return redirect('login');
    }
    public function register()
    {
        return view('register');
    }
    public function registerProses(Request $request)
    {
        // dd($request->all());
        $users = User::create([
            'no_ktp' => $request->no_ktp,
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'no_hp' => $request->no_hp,
            'email' => $request->email,
            'foto' => $request->foto,
            'tgl_lahir' => $request->tgl_lahir,
            'role' => "Member",
            'password' => bcrypt($request->password)
        ]);
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('fotomember/', $request->file('foto')->getClientOriginalName());
            $users->foto = $request->file('foto')->getClientOriginalName();
            $users->save();
        }
        return redirect('/');
    }
    public function loginProses(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('/dashboard');
        }
        return redirect('/');
    }

    public function logout()
    {
        Auth::logout();
        return \redirect('/');
    }
}
