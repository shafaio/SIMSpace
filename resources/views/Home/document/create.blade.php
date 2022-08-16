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
        <h6 class="px-3 py-3 mb-5" style="background-color: #05323C; color: white; ">Tambah Berkas</h6>
        <form action="/home/document" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row mb-2">
                <div class="col-md">
                    <h6 class="p-3 d-block mb-3" style="width: 100%; border-radius: 0; background-color: #05323C ; color: white !important; font-weight: 600;">Nama Berkas</h6>
                    <div class="mb-3">
                        <input type="text" name="nama_berkas" class="form-control radius-none @error('nama_berkas')" is-invalid @enderror" id="exampleFormControlInput1" placeholder="Nama Berkas" style="font-size: 14px; height: 48px"; value="{{ old('nama_berkas') }}">
                        @error('nama_berkas')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <h6 class="p-3 d-block mb-3 mt-4" style="width: 100%; border-radius: 0; background-color: #05323C ; color: white !important; font-weight: 600;">Penanggung Jawab Berkas</h6>
                    <div class="mb-3">
                        <input type="text" name="pj_berkas" class="form-control radius-none @error('pj_berkas')" is-invalid @enderror" id="exampleFormControlInput1" placeholder="Penanggung Jawab Berkas" style="font-size: 14px; height: 48px;" value="{{ old('pj_berkas') }}">
                        @error('pj_berkas')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    <h6 class="p-3 d-block mb-3 mt-4" style="width: 100%; border-radius: 0; background-color: #05323C ; color: white !important; font-weight: 600;">Unggah File</h6>
                    <div class="mb-3">
                        <input type="file" name="file_berkas" class="form-control radius-none @error('file_berkas') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Chief Human Resouce Officer (CHRO)" style="font-size: 14px;">
                        @error('file_berkas')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-end mb-3">
                <button type="submit " class="btn btn-primary m-0 mb-3 fw-normal mt-3 px-4" style="border-radius: 0px; width: fit-content; ">Tambahkan SOP<i class="fa-solid fa-plus " style="margin-left: 8px;"></i></button>
            </div>
        </form>
    </div>
</section>
    
@endsection