@extends('layouts.main')

@section('content')

<section class=" " style="margin-top: 115px; ">
    <div class="container ">
        <div class="row mx-auto " style="height: 143px; width: 568px; ">
            <img src="../asset/img/logo.png" alt=" ">
        </div>
    </div>
</section>

<section class="mt-4">
    <div class="container ">
        <h6 class="px-3 py-3" style="background-color: #05323C; color: white; ">Berkas </h6>

        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show card mx-auto" role="alert" style="width: 32rem">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
        @endif

        @if (auth()->User()->jabatan == "Chief Human Resource Officer")
        <div class="d-flex justify-content-end mb-3">
            <a href="/home/document/create">
                <button type="button " class="btn btn-primary m-0 mb-0 fw-normal mt-0 px-4" style="border-radius: 0px; width: fit-content; ">Tambahkan Berkas<i class="fa-solid fa-plus " style="margin-left: 8px;"></i></button>
            </a>
        </div>
        @endif

        <table id="sop" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>Nama Berkas</th>
                    <th>Penanggung Jawab</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @if ($documents->isEmpty())
                <tr>
                    <td colspan="{{ auth()->user()->jabatan == "Chief Human Resource Officer" ? '4' : '3' }}" class="text-center"><i>Data Berkas Kosong</i></td>
                </tr>
                @else
                @foreach ($documents as $document)
                    <tr>
                        <td class="align-middle">{{ $document->nama_berkas }}</td>
                        <td class="align-middle">{{ $document->pj_berkas }}</td>
                        <td class="align-middle">
                            @if (auth()->user()->jabatan == "Chief Human Resource Officer")
                            <a href="#" style="margin-right: 15px"><img src="../asset/img/Iconly/Light-Outline/Tick-Circle.svg" alt=""></a>
                            <a href="#" style="margin-right: 15px"><img src="../asset/img/Iconly/Light-Outline/Close-Circle.svg" alt=""></a>
                            @endif
                            <a href="#"><img src="../asset/img/Iconly/Light-Outline/Close-Circle.svg" alt=""></a>
                        </td>
                    </tr>
                @endforeach
                @endif
            </tbody>
        </table>
    </div>
</section>
    
@endsection