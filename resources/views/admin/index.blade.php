@extends('layouts.admin')

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
        <h6 class="px-3 py-3 mb-0" style="background-color: #05323C; color: white; ">Data Pegawai SpaceMed</h6>
        <div class="d-flex justify-content-end mb-0">
            <a href="/tambahData" class="text-decoration-none">
                <button type="button " class="btn btn-primary mt-0 mb-3 fw-normal mt-3 px-4" style="border-radius: 0px; width: fit-content; ">Tambah Data Pegawai <i class="fa-solid fa-plus " style="margin-left: 8px;"></i></button>
            </a>
        </div>
        <table id="example" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>Nama Pegawai</th>
                    <th>ID Space</th>
                    <th>Jabatan</th>
                </tr>
            </thead>
            <tbody>

            @foreach ($users as $user)
                <tr>
                    <td>{{ $user['nama_anggota'] }}</td>
                    <td>{{ $user['id_anggota'] }}</td>
                    <td>{{ $user['jabatan'] }}</td>
                </tr>
            @endforeach

            </tbody>
            <!-- <tfoot>
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                </tr>
            </tfoot> -->
        </table>

        {{ $users->links() }}

    </div>
</section>
    
@endsection