<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function login(Request $request)
{
    $request->validate([
        'username' => 'required|string',
        'password' => 'required|string',
    ]);

    $user = User::where('username', $request->username)->first();

    if (!$user || !Hash::check($request->password, $user->password)) {
        return back()->withErrors(['login' => 'Username atau password salah']);
    }

    // ✅ Ini baris penting: login user ke sistem Auth Laravel
    Auth::login($user);

    // ✅ Redirect ke halaman setelah login
    return redirect()->route('home')->with('success', 'Selamat datang, ' . $user->username . '!');
}

}
