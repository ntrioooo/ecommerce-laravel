<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' => 'Login',
            'image' => 'images/login-image.png',
            'active' => 'login'
        ]);
    }

    public function store(Request $request)
    {
        $loginUser = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($loginUser)) {
            $request->session()->regenerate();

            if(Auth::user()->is_admin ==1 ) {
                $request->session()->regenerate();

                return redirect()->intended('/dashboard');
            }
            return redirect()->intended('/shops');
        };

        return back()->with('loginError', 'Login gagal!');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');

    }
}
