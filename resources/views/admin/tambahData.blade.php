@extends('layouts.admin')

@section('content')
    
<section class=" " style="margin-top: 115px; ">
    <div class="container ">
        <div class="row mx-auto " style="height: 143px; width: 568px; ">
            <img src="../asset/img/logo.png " alt=" ">
        </div>
    </div>
</section>

<section class="mt-4">
    <form action="/"></form>
    <div class="container">
        <div class="row mb-2">
            <div class="col-md">
                <h6 class="p-3 d-block mb-3" style="width: 100%; border-radius: 0; background-color: #095464 ; color: white !important; font-weight: 600;">Nama Pegawai </h6>
                <div class="mb-3">
                    <input type="text" class="form-control radius-none" Nama Pegawai="exampleFormControlInput1" placeholder="Nama Pegawai" style="font-size: 14px; height: 48px;">
                </div>
                <h6 class="p-3 d-block mb-3 mt-4" style="width: 100%; border-radius: 0; background-color: #095464 ; color: white !important; font-weight: 600;">ID Anggota</h6>
                <div class="mb-3">
                    <input type="text" class="form-control radius-none" id="exampleFormControlInput1" placeholder="ID Anggota" style="font-size: 14px; height: 48px;">
                </div>
                <h6 class="p-3 d-block mb-3 mt-4" style="width: 100%; border-radius: 0; background-color: #095464 ; color: white !important; font-weight: 600;">Password</h6>
                <div class="mb-3">
                    <input type="text" class="form-control radius-none" id="exampleFormControlInput1" placeholder="Password" style="font-size: 14px; height: 48px;">
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-end mb-3">
            <button type="button " class="btn btn-primary m-0 mb-3 fw-normal mt-3 px-4" style="border-radius: 0px; width: fit-content; ">Tambahkan Data Pegawai <i class="fa-solid fa-plus " style="margin-left: 8px;"></i></button>
        </div>
    </div>
</section>

@endsection