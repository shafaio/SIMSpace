@extends('layouts.main') 

@section('content')

<section class="" style="margin-top: 128px;">
    <div class="container">
        <div class="row mx-auto" style="height: 143px; width: 568px;">
            <img src="../asset/img/logo.png" alt="">
        </div>
    </div>
</section>

@if(session()->has('loginError'))
<div class="alert alert-danger alert-dismissible fade show card mx-auto" role="alert" style="width: 32rem">
    {{ session('loginError') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>
@endif

@if(session()->has('success'))
<div class="alert alert-success alert-dismissible fade show card mx-auto" role="alert" style="width: 32rem">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>
@endif

<form action="/login" method="post">
    @csrf
    <section class="mt-5">
        <div class="container">
            <div class="card mx-auto" style="width: 32rem; border: #05323C solid; border-radius: 0px;">
                <div class="card-body p-0" style="border: #05323C solid">
                    <h5 class="m-0 px-3 py-3 text-center" style="background-color:#05323C; color: white;">Masuk Akun</h5>
                    <div class="input-group my-3 px-3">
<<<<<<< HEAD:resources/views/index.blade.php
                        <span class="input-group-text bg-transparent bottom p-3" id="basic-addon1">
                            <i class="fa-regular fa-user"></i>
                        </span>
                        <input type="text" name="id" id="id" class="logininput form-control no-focus-outline @error('id') is-invalid @enderror" placeholder="ID Anggota" aria-label="Id" aria-describedby="basic-addon1" style="border-radius: 0px !important;" autofocus value="{{ old('id') }}">                        @error('id')
=======
                        <span class="input-group-text bg-transparent bottom p-3" id="basic-addon1"><i class="fa-regular fa-user"></i></span>
                        <input type="text" name="id_anggota" id="id_anggota" class="form-control no-focus-outline logininput @error('id_anggota') is-invalid @enderror" placeholder="ID Anggota" style="border-radius: 0px !important;" autofocus value="{{ old('id_anggota') }}">
                        @error('id_anggota')
>>>>>>> 3363b5e99a8f39a647b9e0e99c8ccd228ade6f65:resources/views/login/index.blade.php
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="input-group my-3 px-3">
                        <span class="input-group-text bg-transparent bottom p-3" id="basic-addon1">
                            <i class="fa-solid fa-lock"></i>
                        </span>
<<<<<<< HEAD:resources/views/index.blade.php
                        <input type="password" name="password" id="password" class="form-control logininput no-focus-outline" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
=======
                        <input type="password" name="password" id="password" class="form-control no-focus-outline logininput @error('password') is-invalid @enderror" placeholder="Password">
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
>>>>>>> 3363b5e99a8f39a647b9e0e99c8ccd228ade6f65:resources/views/login/index.blade.php
                    </div>
                    <button type="submit" class="btn btn-primary d-block m-0 mx-auto mb-3 no-focus-outline" style="width: 75%; border-radius: 99px;">Masuk</button>
                </div>
            </div>
        </div>
        </div>
    </section>
</form>

@endsection