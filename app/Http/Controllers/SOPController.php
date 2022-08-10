<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SopController extends Controller
{
    public function Index (Request $request) {

    }

    public function Store (Request $request) {
        return view ('sop.tambahData', [
            'title' => 'Tambah Data Standar Operasional Prosedur'
        ]);
    }

    public function adminSop () {
        return view ('sop.adminSOP');   
    }
}
