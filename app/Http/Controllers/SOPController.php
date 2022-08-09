<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SOPController extends Controller
{
    public function Index () {
        return view ('sop.viewSOP', [
            'title' => 'Standar Operasional Prosedur',
        ]);
    }
}
