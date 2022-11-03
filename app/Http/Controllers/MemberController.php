<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{
    public function index()
    {
        $members = User::all();
        // dd($members);
        return view("admin.member.index", compact('members'));
    }

    public function tambah()
    {
        return view('admin.member.tambah');
    }

    public function store(Request $request)
    {
        $members = User::create([
            'no_ktp' => $request->no_ktp,
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'no_hp' => $request->no_hp,
            'email' => $request->email,
            'foto' => $request->foto,
            'tgl_lahir' => $request->tgl_lahir,
            'password' => bcrypt($request->password)
        ]);
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('fotomember/', $request->file('foto')->getClientOriginalName());
            $members->foto = $request->file('foto')->getClientOriginalName();
            $members->save();
        }
        return redirect('/member');
    }

    public function ubah($id)
    {
        $members = User::find($id);
        return view('admin.member.ubah', compact('members'));
    }

    public function prosesUbah(Request $request, $id)
    {
        $members = User::find($id);
        $members->update([
            'no_ktp' => $request->no_ktp,
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'no_hp' => $request->no_hp,
            'email' => $request->email,
            'foto' => $request->foto,
            'tgl_lahir' => $request->tgl_lahir,
            'password' => bcrypt($request->password)
        ]);
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('fotomember/', $request->file('foto')->getClientOriginalName());
            $members->foto = $request->file('foto')->getClientOriginalName();
            $members->save();
        }
        return redirect('/member');
    }

    public function hapus($id)
    {
        $data = User::find($id);

        $data->delete();
        return redirect('/member');
    }

    public function profil(Request $request)
    {
        $data = Auth::user();
        return view('profile', compact('data'));
    }
}
