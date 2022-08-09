<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SOPController extends Controller
{
    public function Index () {
        return view ('sop.index', [
            'title' => 'Standar Operasional Prosedur',
        ]);
    }
}
