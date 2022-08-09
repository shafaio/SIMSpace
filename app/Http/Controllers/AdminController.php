<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function Index (Request $request) {

        return view ('admin.index', [
            'title' => 'Admin',
            'users' => User::latest()->paginate(10)
        ]);
    }

    public function TambahData () {
        return view ('admin.tambahData', [
            'title' => 'Tambah Data Pegawai'
        ]);
    }
}
