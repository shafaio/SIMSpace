@extends('layouts.main') @section('content')

<section class="" style="margin-top: 128px;">
    <div class="container">
        <div class="row mx-auto" style="height: 143px; width: 568px;">
            <img src="/asset/img/logo.png" alt="">
        </div>
    </div>
</section>

@if(session()->has('loginError'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ session('loginError') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>
@endif

<form action="/" method="post">
    @csrf
    <section class="mt-5">
        <div class="container">
            <div class="card mx-auto" style="width: 32rem; border: #05323C solid; border-radius: 0px;">
                <div class="card-body p-0" style="border: #05323C solid;">
                    <h5 class="m-0 px-3 py-3 text-center" style="background-color:#05323C; color: white;">Masuk Akun</h5>
                    <div class="input-group my-3 px-3">
                        <span class="input-group-text bg-transparent bottom p-3" id="basic-addon1">
                            <i class="fa-regular fa-user"></i>
                        </span>
                        <input type="text" name="id" id="id" class="logininput form-control no-focus-outline @error('id') is-invalid @enderror" placeholder="ID Anggota" aria-label="Id" aria-describedby="basic-addon1" style="border-radius: 0px !important;" autofocus value="{{ old('id') }}">                        @error('id')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="input-group my-3 px-3">
                        <span class="input-group-text bg-transparent bottom p-3" id="basic-addon1">
                            <i class="fa-solid fa-lock"></i>
                        </span>
                        <input type="password" name="password" id="password" class="form-control logininput no-focus-outline" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
                    </div>
                    <button type="submit" class="btn btn-primary d-block m-0 mx-auto mb-3 no-focus-outline" style="width: 75%; border-radius: 99px;">Masuk</button>
                </div>
            </div>
        </div>
        </div>
    </section>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

@endsection