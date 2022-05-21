<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register',
            'image' => 'images/login-image.png'
        ]);
    }

    public function store(Request $request)
    {
        $createUser = $request->validate([
            'name' => 'required',
            'username' => 'required|min:5|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5'
        ]);

        $createUser['password'] = bcrypt($createUser['password']);

        User::create($createUser);

        return redirect('/login')->with('success', 'Registrasi telah berhasil! Silahkan login');
    }
}
