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
        @if (auth()->User()->jabatan == "Chief Oprational Officer")
        <div class="d-flex justify-content-end mb-3">
            <a href="/home/sop/create">
                <button type="button " class="btn btn-primary m-0 mb-3 fw-normal mt-3 px-4" style="border-radius: 0px; width: fit-content; ">Tambahkan SOP <i class="fa-solid fa-plus " style="margin-left: 8px;"></i></button>
            </a>
        </div>
        @endif
        <table id="example" class="table table-striped" style="width:100%">
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

            @foreach ($sops as $sop)
                <tr>
                    <td class="align-middle">{{ $sop->no_sop }}</td>
                    <td class="align-middle">
                        <a href="/home/sop/{{ $sop->no_sop }}">
                            {{ $sop->nama_sop }}
                        </a>
                    </td>
                    <td class="align-middle">{{ $sop->pj_sop }}</td>
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