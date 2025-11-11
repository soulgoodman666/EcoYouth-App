<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function showRegisterForm()
    {
        return view('auth.register'); // nanti buat file view register.blade.php
    }

    public function register(Request $request)
    {
        // Validasi input
        $request->validate([
            'username' => 'required|string|unique:users,username',
            'password' => 'required|string|min:4|confirmed',
        ]);

        // Simpan user baru
        User::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'email' => null,
        ]);

        // Redirect ke login dengan pesan sukses
        return redirect()->route('login')->with('success', 'Registrasi berhasil! Silakan login.');
    }
}
