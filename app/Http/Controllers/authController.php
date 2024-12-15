<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class authController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect('dashboard');
        }
        return view('auth.login');
    }

    public function actionLogin(Request $request)
    {
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if (Auth::attempt($data)) {
            return redirect()->route('admin.umum')->with('success', 'Berhasil Login');
        } else {
            return redirect('/')->with('error', 'Email atau Password Salah');
        }
    }

    public function actionLogout()
    {
        Auth::logout();
        return redirect('/')->with('success', 'Berhasil Logout');
    }
}
