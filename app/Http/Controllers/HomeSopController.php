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
            'no_sop' => 'required|unique:sops|min:7|max:7',
            'nama_sop' => 'required|unique:sops',
            'pj_sop' => 'required',
            'file_sop' => 'required|file|max:5120|mimes:pdf'
        ]);

        if ($request->file('file_sop')) {
            $file_name = $request->nama_sop;
            $validatedData['file_sop'] = $request->file('file_sop')->storeAs('dokumen-sop', $file_name);
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
        return view ('home.sop.edit', [
            'title' => 'Ubah SOP',
            'sop' => $sop
        ]);
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
        $tmpValidated = [
            'pj_sop' => 'required',
            'file_sop' => 'file|max:5120|mimes:pdf'
        ];

        if ($request->no_sop != $sop->no_sop) {
            $tmpValidated['no_sop'] = 'required|unique:sops|min:7|max:7';
        }

        if ($request->nama_sop != $sop->nama_sop) {
            $tmpValidated['nama_sop'] = 'required|unique:sops';
        }

        $validatedData = $request->validate($tmpValidated);

        Sop::where('id', $sop->id)
            ->update($validatedData);

        return redirect('/home/sop')->with('success', "Berhasil Merubah SOP!");
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
