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
        <h6 class="px-3 py-3 mb-5" style="background-color: #05323C; color: white; ">Ubah Standar Operasional Prosedur {{ $sop->nama_sop }}</h6>
        <form action="/home/sop/{{ $sop->no_sop }}" method="post" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="row mb-2">
                <div class="col-md">
                    <h6 class="p-3 d-block mb-3" style="width: 100%; border-radius: 0; background-color: #05323C ; color: white !important; font-weight: 600;">Nomor SOP</h6>
                    <div class="mb-3">
                        <input type="text" name="no_sop" class="form-control radius-none @error('no_sop') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Nomor SOP" style="font-size: 14px; height: 48px"; value="{{ old('no_sop', $sop->no_sop) }}">
                        @error('no_sop')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <h6 class="p-3 d-block mb-3 mt-4" style="width: 100%; border-radius: 0; background-color: #05323C ; color: white !important; font-weight: 600;">Nama SOP</h6>
                    <div class="mb-3">
                        <input type="text" name="nama_sop" class="form-control radius-none @error('nama_sop') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Nama SOP" style="font-size: 14px; height: 48px;" value="{{ old('nama_sop', $sop->nama_sop) }}">
                        @error('nama_sop')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <h6 class="p-3 d-block mb-3 mt-4" style="width: 100%; border-radius: 0; background-color: #05323C ; color: white !important; font-weight: 600;">Penanggung Jawab</h6>
                    <div class="mb-3">
                        <input type="text" name="pj_sop" class="form-control radius-none @error('pj_sop') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Chief Human Resouce Officer (CHRO)" style="font-size: 14px; height: 48px;" value="{{ old('pj_sop', $sop->pj_sop) }}">
                        @error('pj_sop')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <h6 class="p-3 d-block mb-3 mt-4" style="width: 100%; border-radius: 0; background-color: #05323C ; color: white !important; font-weight: 600;">Unggah File</h6>
                    <div class="mb-3">
                        <input type="file" name="file_sop" class="form-control radius-none @error('file_sop') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Chief Human Resouce Officer (CHRO)" style="font-size: 14px;">
                        @error('file_sop')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-end mb-3">
                <button type="submit " class="btn btn-primary m-0 mb-3 fw-normal mt-3 px-4" style="border-radius: 0px; width: fit-content; ">Ubah SOP<i class="fa-solid fa-plus " style="margin-left: 8px;"></i></button>
            </div>
        </form>
    </div>
</section>
    
@endsection