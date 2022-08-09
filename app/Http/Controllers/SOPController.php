<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SOPController extends Controller
{
    public function Index (Request $request) {
        return view ('sop.index', [
            'title' => 'Standar Operasional Prosedur',
        ]);
    }

    public function adminSOP () {
        return view ('sop.adminSOP');   
    }
}
