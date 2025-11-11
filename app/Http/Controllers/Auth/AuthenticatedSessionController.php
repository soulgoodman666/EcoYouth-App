<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class AuthenticatedSessionController extends Controller
{
    public function create()
    {
        return view('auth.login'); // Pastikan file login.blade.php ada di folder resources/views/auth
    }

    public function store(Request $request)
    {

        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $user = User::where('username', $request->username)->first();

        if ($user) {
            Auth::login($user);
            return redirect()->intended('/home');
        } else {
            return back()->withErrors([
                'username' => 'Nama tidak ditemukan.',
            ]);
        }
    }

    public function destroy(Request $request)
    {
        Auth::logout();
        session()->flash('message', 'Anda telah berhasil logout.');
        return redirect('/login'); // Arahkan ke halaman login setelah logout
    }
}