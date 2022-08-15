<?php

namespace App\Http\Controllers;

use App\Models\Sop;
use Illuminate\Http\Request;

class HomeSopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('Home.sop.index', [
            'title' => 'Standar Operasional Prosedur',
            'sops' => Sop::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('home.sop.create', [
            'title' => 'Tambah SOP'
        ]); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'no_sop' => 'required',
            'nama_sop' => 'required',
            'pj_sop' => 'required',
            'file_sop' => 'required|file|max:5120|mimes:pdf'
        ]);

        if ($request->file('file_sop')) {
            $validatedData['file_sop'] = $request->file('file_sop')->store('dokumen-sop');
        }

        Sop::create($validatedData);
        
        return redirect('/home/sop')->with('success', "Berhasil Menambahkan SOP!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sop  $sop
     * @return \Illuminate\Http\Response
     */
    public function show(Sop $sop)
    {
        return view ('home.sop.view', [
            'title' => $sop->nama_sop,
            'sop' => $sop
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sop  $sop
     * @return \Illuminate\Http\Response
     */
    public function edit(Sop $sop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sop  $sop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sop $sop)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sop  $sop
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sop $sop)
    {
        //
    }
}
