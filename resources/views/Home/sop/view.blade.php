@extends('layouts.main')

@section('content')

<section class=" " style="margin-top: 115px; ">
    <div class="container ">
        <div class="row mx-auto " style="height: 143px; width: 568px; ">
            <img src="/asset/img/logo.png " alt=" ">
        </div>
    </div>
</section>

<section class="mt-4">
    <div class="container">
        <h6 class="px-3 py-3 mb-5" style="background-color: #05323C; color: white; ">
            <i class="fa-solid fa-file-lines fa-lg me-2"></i>Standar Operasional Prosedur {{ $title }}
        </h6>
        <div class="row mb-2">
            <div class="col-md-7">
                <embed src="{{ asset('storage/' . $sop->file_sop) }}" type="application/pdf" width="100%" height="1000px">
            </div>
            <div class="col-md-5">
                <div>
                    <h6 class="p-3 d-block mb-3" style="width: 50%; border-radius: 0; background-color: #05323C ; color: white !important; font-weight: 600;">Nomor SOP</h6>
                    <p class="p-3" style="font-weight: 600; font-size: 16px;">{{ $sop->no_sop }}</p>
                </div>
                <div>
                    <h6 class="p-3 d-block mb-3 mt-4" style="width: 50%; border-radius: 0; background-color: #05323C ; color: white !important; font-weight: 600;">Penanggung Jawab</h6>
                    <p class="p-3" style="font-weight: 600; font-size: 16px;">{{ $sop->pj_sop }}</p>
                </div>
            </div>
        </div>
    </div>
</section>
    
@endsection