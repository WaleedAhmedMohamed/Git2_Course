<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginView()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        if(Auth::attempt(['mobile' => $request->get('mobile'), 'password' => $request->get('password')])) {
            return redirect()->route('home');
        }

        return redirect()->route('auth.login.view');
    }

    public function logout()
    {
        auth()->logout();

        return redirect()->route('home');
    }
}
