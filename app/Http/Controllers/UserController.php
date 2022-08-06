<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function register (Request $request) {
        return $request->validate([
            'id' => 'required|integer|unique|max:11',
            'nama' => 'required|max:255',
            'password' => 'required|min:8|max:255'
        ]);
    }

    public function Index () {
        return view('index', [
            'title' => 'Login',
        ]);
    }
    
    public function Login (Request $request) {
        $credentials = $request->validate([
            'id' => 'required|integer',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/SOP');
        }
    }
}
