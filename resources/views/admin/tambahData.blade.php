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
    <form action="/tambahData" method="post">
        @csrf
        <div class="container">
            <div class="row mb-2">
                <div class="col-md">
                    <h6 class="p-3 d-block mb-3 mt-4" style="width: 100%; border-radius: 0; background-color: #05323C ; color: white !important; font-weight: 600;">ID Anggota</h6>
                    <div class="mb-3">
                        <input type="text" class="form-control radius-none" id="id_anggota" name="id_anggota" placeholder="ID Anggota" style="font-size: 14px; height: 48px;">
                    </div>
                    <h6 class="p-3 d-block mb-3" style="width: 100%; border-radius: 0; background-color: #05323C ; color: white !important; font-weight: 600;">Nama Pegawai </h6>
                    <div class="mb-3">
                        <input type="text" class="form-control radius-none" id="nama_anggota" name="nama_anggota" placeholder="Nama Pegawai" style="font-size: 14px; height: 48px;">
                    </div>
                    <h6 class="p-3 d-block mb-3" style="width: 100%; border-radius: 0; background-color: #05323C ; color: white !important; font-weight: 600;">Jabatan </h6>
                    <select class="form-select" aria-label="Default select example" style="font-size: 14px; height: 48px;">
                        <option >Pilih Jabatan</option>
                        <option value="1">Chief Executive Officer</option>
                        <option value="2">Chief Marketing Officer</option>
                        <option value="3">Chief Operational Officer</option>
                        <option value="4">Chief Technology Officer</option>
                        <option value="5">Chief Finance Officer</option>
                        <option value="6">Chief Human Resource Officer</option>
                    </select>
                    <!-- <div class="mb-3">
                        <input type="text" class="form-control radius-none" id="jabatan" name="jabatan" placeholder="Jabatan" style="font-size: 14px; height: 48px;">
                    </div> -->
                    <h6 class="p-3 d-block mb-3 mt-4" style="width: 100%; border-radius: 0; background-color: #05323C ; color: white !important; font-weight: 600;">Password</h6>
                    <div class="mb-3">
                        <input type="password" class="form-control radius-none" id="password" name="password" placeholder="Password" style="font-size: 14px; height: 48px;">
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-end mb-3">
                <button type="submit" class="btn btn-primary m-0 mb-3 fw-normal mt-3 px-4" style="border-radius: 0px; width: fit-content; "><i class="fa-solid fa-plus " style="margin-right: 8px;"></i>Tambahkan Data Pegawai</button>
            </div>
        </div>
    </form>
    
</section>

@endsection