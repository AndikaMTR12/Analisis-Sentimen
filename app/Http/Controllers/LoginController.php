<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        $title = 'Login';
        return view('auth/login', [
            'title' => $title
        ]);
    }

    public function authLogin(Request $request)
    {
        $validates = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($validates)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        } else {
            return redirect('/');
        }
    }

    public function regis()
    {
        $title = 'Registration';
        return view('auth/regis', [
            'title' => $title
        ]);
    }

    public function authRegister(Request $request)
    {
        $validate = $request->validate([
            'username' => 'required|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:3|max:15'
        ]);

        $validate['password'] = bcrypt($validate['password']);
        User::create($validate);

        return redirect('/');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
