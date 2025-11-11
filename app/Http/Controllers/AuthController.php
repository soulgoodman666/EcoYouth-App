<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login'); // sesuaikan nama file Blade login kamu
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string',
        ]);

        // Login dengan nama sebagai username
        $user = User::firstOrCreate(
            ['name' => $request->email],
            ['role' => 'user']
        );

        // Simpan user ID di session
        Session::put('user_id', $user->id);

        return redirect()->route('home');
    }

    public function home()
    {
        $user = User::find(Session::get('user_id'));

        return view('home_page', ['user' => $user]);
    }
}
