<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function Index () {
        return view ('admin.index', [
            'title' => 'Admin'
        ]);
    }

    public function TambahData () {
        return view ('admin.tambahData', [
            'title' => 'Tambah Data Pegawai'
        ]);
    }
}
