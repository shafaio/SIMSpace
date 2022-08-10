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
        <h6 class="px-3 py-3 mb-5" style="background-color: #05323C; color: white; ">Tambah Standar Operasional Prosedur</h6>
        <div class="row mb-2">
            <div class="col-md-4">
                <!-- drag n drop file -->
                <div class="drag-area py-2" style="height: 535px;">
                    <div class="icon"><i class="fas fa-cloud-upload-alt"></i></div>
                    <header>Drag & Drop to Upload File</header>
                    <span>OR</span>
                    <button class="btn btn-primary">Browse File</button>
                    <input type="file" hidden accept="">
                </div>
            </div>
            <div class="col-md-8">
                <h6 class="p-3 d-block mb-3" style="width: 35%; border-radius: 0; background-color: #05323C ; color: white !important; font-weight: 600;">Nomor SOP</h6>
                <div class="mb-3">
                    <input type="text" class="form-control radius-none" id="exampleFormControlInput1" placeholder="Isi Nama Dokumen" style="font-size: 14px; height: 48px;">
                </div>
                <h6 class="p-3 d-block mb-3 mt-4" style="width: 35%; border-radius: 0; background-color: #05323C ; color: white !important; font-weight: 600;">Nama SOP</h6>
                <div class="mb-3">
                    <input type="text" class="form-control radius-none" id="exampleFormControlInput1" placeholder="Isi Nama Penanggung Jawab" style="font-size: 14px; height: 48px;">
                </div>
                <h6 class="p-3 d-block mb-3 mt-4" style="width: 35%; border-radius: 0; background-color: #05323C ; color: white !important; font-weight: 600;">Nama Penanggung Jawab</h6>
                <div class="mb-3">
                    <input type="text" class="form-control radius-none" id="exampleFormControlInput1" placeholder="Indah Fadlina" style="font-size: 14px; height: 48px;">
                </div>
                <h6 class="p-3 d-block mb-3 mt-4" style="width: 35%; border-radius: 0; background-color: #05323C ; color: white !important; font-weight: 600;">Penanggung Jawab</h6>
                <div class="mb-3">
                    <input type="text" class="form-control radius-none" id="exampleFormControlInput1" placeholder="Chief Human Resouce Officer (CHRO)" style="font-size: 14px; height: 48px;">
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-end mb-3">
            <button type="button " class="btn btn-primary m-0 mb-3 fw-normal mt-3 px-4" style="border-radius: 0px; width: fit-content; ">Tambahkan Dokumen <i class="fa-solid fa-plus " style="margin-left: 8px;"></i></button>
        </div>
    </div>
</section>
    
@endsection