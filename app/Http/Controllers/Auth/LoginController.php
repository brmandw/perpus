<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'username' => 'required|string',
            'password' => 'required',
        ]);

        $credentials = $request->only('username', 'password');

        // Jika kredensial benar
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/index')->with('success', 'Berhasil Login!');;
        }

        // Jika kredensial salah, kirim pesan error menggunakan session
        return redirect()->back()->with('error', 'Username atau Password Salah');

        
    }
    protected function authenticated(Request $request, $user)
{
    if ($user->role == 'admin') {
        return redirect()->route('admin.dataadmin.index');
    } elseif ($user->role == 'petugas') {
        return redirect()->route('petugas.dataadmin.index');
    } elseif ($user->role == 'peminjam') {
        return redirect('/dashboard-peminjam'); // Sesuaikan dengan route peminjam
    }

    return redirect('/welcome'); // Default jika role tidak terdefinisi
}
}

