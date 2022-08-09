<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function Store (Request $request) {
        $validatedData = $request->validate([
            'id_anggota' => 'required|max:11|unique:users',
            'nama_anggota' => 'required|max:255',
            'jabatan' => 'required|max:255',
            'password' => 'required|min:8|max:255'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        return redirect('/admin');
    }
}
