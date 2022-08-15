<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function Store (Request $request) {
        $validatedData = $request->validate([
            'id_anggota' => 'required|min:9|max:9|unique:users',
            'nama_anggota' => 'required|max:255',
            'jabatan' => 'required|max:255',
            'password' => 'required|min:8|max:255'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        return redirect('/admin');
    }
}
