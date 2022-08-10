@extends('layouts.main')

@section('content')
    
<section class=" " style="margin-top: 115px; ">
    <div class="container ">
        <div class="row mx-auto " style="height: 143px; width: 568px; ">
            <img src="../asset/img/logo.png " alt=" ">
        </div>
    </div>
</section>

<section class="mt-4 ">
    <div class="container ">
        <h6 class="px-3 py-3 " style="background-color: #05323C; color: white; ">Berkas</h6>
        <a href="tambah-berkas.html" class="text-decoration-none">
            <div class="d-flex justify-content-end mb-3">
                <button type="button " class="btn btn-primary m-0 mb-3 fw-normal mt-3 px-4" style="border-radius: 0px; width: fit-content; ">Tambahkan Berkas <i class="fa-solid fa-plus " style="margin-left: 8px;"></i></button>
            </div>
        </a>
        <table id="example" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>Nama Dokumen</th>
                    <th>Penanggung Jawab</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($documents as $document)
                <tr>
                    <td class="align-middle">
                        <a href="/home/sop/{{ $document->nama_berkas }}">
                            {{ $document->nama_berkas }}
                        </a>
                    </td>
                    <td class="align-middle">{{ $document->pj_berkas }}</td>
                    @if (auth()->user()->jabatan == "Chief Oprational Officer")
                    <td class="align-middle">
                        <a href="#"><img href="/" src="../asset/img/Iconly/Light-Outline/Tick-Circle.svg" alt=""></a>
                        <a href="#"><img href="#" src="../asset/img/Iconly/Light-Outline/Close-Circle.svg" alt=""></a>
                    </td>
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>

@endsection