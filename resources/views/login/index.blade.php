@extends('layouts.main') 

@section('content')

<section class="" style="margin-top: 128px;">
    <div class="container">
        <div class="row mx-auto" style="height: 143px; width: 568px;">
            <img src="/asset/img/logo.png" alt="">
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

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" style="background-color: #05323C !important;">
    <div class="container ">
        <a class="navbar-brand px-3 mx-0 py-1 align-self-center" href="#" style="background-color: white; border-radius: 99px;">
            <img src="asset/img/white.png" alt="logo" height="24" class="d-inline-block">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <d iv class="collapse navbar-collapse px-5" id="navbarNav">
            <ul class="navbar-nav">

                <!-- <li class="nav-item">
                    <a class="nav-link" href="#">SOP</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Berkas</a>
                </li> -->

            </ul>
        </d>
    </div>
</nav>

<section class="" style="margin-top: 115px;">
    <div class="container">
        <div class="row mx-auto" style="height: 143px; width: 568px;">
            <img src="asset/img/logo.png" alt="">
        </div>
    </div>
</section>

<section class="mt-5">
    <div class="container">
        <div class="card mx-auto" style="width: 32rem; border: #05323C solid; border-radius: 0px;">
            <div class="card-body p-0" style="border: #05323C solid;">
                <h5 class="m-0 px-3 py-3 text-center" style="background-color:#05323C; color: white;">Masuk Akun</h5>
                <div class="input-group my-3 px-3">
                    <span class="input-group-text bg-transparent bottom p-3" id="basic-addon1"><i class="fa-regular fa-user"></i></span>
                    <input type="text" class="form-control no-focus-outline logininput" placeholder="ID SpaceMed" aria-label="Username" aria-describedby="basic-addon1" style="border-radius: 0px !important;">
                </div>
                <div class="input-group my-3 px-3">
                    <span class="input-group-text bg-transparent bottom p-3" id="basic-addon1">
                        <i class="fa-solid fa-lock"></i>
                    </span>
                    <input type="password" class="form-control no-focus-outline logininput" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
                </div>
                <button type="button" class="btn btn-primary d-block m-0 mx-auto mb-3" style="width: 75%; border-radius: 99px;">Masuk</button>
            </div>
        </div>
    </div>
    </div>
</section>

<form action="/" method="post">
    @csrf
    <section class="mt-5">
        <div class="container">
            <div class="card mx-auto" style="width: 32rem; border: #05323C solid; border-radius: 0px;">
                <div class="card-body p-0" style="border: #05323C solid">
                    <h5 class="m-0 px-3 py-3 text-center" style="background-color:#05323C; color: white;">Masuk Akun</h5>
                    <div class="input-group my-3 px-3">
                        <span class="input-group-text bg-transparent bottom p-3" id="basic-addon1"><i class="fa-regular fa-user"></i></span>
                        <input type="text" name="id_anggota" id="id_anggota" class="form-control @error('id_anggota') is-invalid @enderror" placeholder="ID Anggota" style="border-radius: 0px !important;" autofocus value="{{ old('id_anggota') }}">
                        @error('id_anggota')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="input-group my-3 px-3">
                        <span class="input-group-text bg-transparent bottom p-3" id="basic-addon1">
                            <i class="fa-solid fa-lock"></i>
                        </span>
                        <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password">
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary d-block m-0 mx-auto mb-3" style="width: 75%; border-radius: 99px;">Masuk</button>
                </div>
            </div>
        </div>
        </div>
    </section>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

@endsection