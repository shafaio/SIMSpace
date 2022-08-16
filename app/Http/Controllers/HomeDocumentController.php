<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;

class HomeDocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('Home.document.index', [
            'title' => 'Berkas',
            'documents' => Document::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('home.document.create', [
            'title' => 'Tambah Berkas'
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
            'nama_berkas' => 'required',
            'pj_berkas' => 'required',
            'file_berkas' => 'required|file|max:5120|mimes:pdf'
        ]);

        if ($request->file('file_berkas')) {
            $validatedData['file_berkas'] = $request->file('file_berkas')->store('dokumen-berkas');
        }

        Document::create($validatedData);
        
        return redirect('/home/document')->with('success', "Berhasil Menambahkan Berkas!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function show(Document $document)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function edit(Document $document)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Document $document)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function destroy(Document $document)
    {
        //
    }
}
