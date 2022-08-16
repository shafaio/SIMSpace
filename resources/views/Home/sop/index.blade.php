@extends('layouts.main')

@section('content')

<section class=" " style="margin-top: 115px; ">
    <div class="container ">
        <div class="row mx-auto " style="height: 143px; width: 568px; ">
            <img src="../asset/img/logo.png " alt=" ">
        </div>
    </div>
</section>

<section class="mt-4">
    <div class="container ">
        <h6 class="px-3 py-3" style="background-color: #05323C; color: white; ">Standar Operasional Prosedur</h6>
        <p align="justify">Standar Operasional Prosedur adalah Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id.</p>

        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show card mx-auto" role="alert" style="width: 32rem">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
        @endif

        @if (auth()->User()->jabatan == "Chief Oprational Officer")
        <div class="d-flex justify-content-end mb-3">
            <a href="/home/sop/create">
                <button type="button " class="btn btn-primary m-0 mb-0 fw-normal mt-0 px-4" style="border-radius: 0px; width: fit-content; ">Tambahkan SOP <i class="fa-solid fa-plus " style="margin-left: 8px;"></i></button>
            </a>
        </div>
        @endif

        <table id="sop" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>Nomor SOP</th>
                    <th>Nama SOP</th>
                    <th>Penanggung Jawab</th>
                    @if (auth()->User()->jabatan == "Chief Oprational Officer")
                    <th>Aksi</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @if ($sops->isEmpty())
                <tr>
                    <td colspan="{{ auth()->user()->jabatan == "Chief Oprational Officer" ? '4' : '3' }}" class="text-center"><i>Data SOP Kosong</i></td>
                </tr>
                @else
                @foreach ($sops as $sop)
                    <tr>
                        <td class="align-middle">{{ $sop->no_sop }}</td>
                        <td class="align-middle">
                            <a href="/home/sop/{{ $sop->no_sop }}" style="color:inherit" >
                                {{ $sop->nama_sop }}
                            </a>
                        </td>
                        <td class="align-middle">{{ $sop->pj_sop }}</td>
                        @if (auth()->user()->jabatan == "Chief Oprational Officer")
                        <td class="align-middle">
                            <a href="#" style="margin-right: 15px"><img src="../asset/img/Iconly/Light-Outline/Tick-Circle.svg" alt=""></a>
                            <a href="#"><img src="../asset/img/Iconly/Light-Outline/Close-Circle.svg" alt=""></a>
                        </td>
                        @endif
                    </tr>
                @endforeach
                @endif
            </tbody>
        </table>
    </div>
</section>
    
@endsection