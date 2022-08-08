<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function Store (Request $request) {
        return $request->validate([
            'id_anggota' => 'required|max:11|unique',
            'nama_anggota' => 'required|max:255',
            'password' => 'required|min:8|max:255'
        ]);
    }
    
    public function Login (Request $request) {
        $credentials = $request->validate([
            'id_anggota' => 'required|max:11',
            'password' => 'required|min:8|max:255',
        ]);
        
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            
            return redirect()->intended('/admin')->with('success', 'Login Success!');
        }
        
        return back()->with('loginError', 'Login Failed!');
    }
}
