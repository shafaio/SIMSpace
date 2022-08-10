<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function Index () {
        return view('login.index', [
            'title' => 'Login',
        ]);
    }

    public function Login (Request $request) {
        $credentials = $request->validate([
            'id_anggota' => 'required|max:11',
            'password' => 'required|min:8|max:255'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            
            return redirect()->intended('/home/sop');
        }
        
        return back()->with('loginError', 'Login Failed!');
    }

    public function Logout (Request $request) {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
