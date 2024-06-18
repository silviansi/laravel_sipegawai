@extends('layouts.base')
@section('title', 'Login')
@section('content')

<div class="login-page d-flex align-items-center justify-content-center h-100">
  <div class="container mb-5">
    <div class="row">
      <div class="col-lg-10 offset-lg-1">
        <h3 class="mb-3 mt-5 text-info fw-bold text-gradient text-center">Selamat Datang di SIPegawai!</h3>
        <div class="bg-white shadow rounded">
          <div class="row">
            <div class="col-md-7 pe-0">
              <div class="form-left h-100 py-5 px-5">
                <form action="{{ route('login') }}" class="row g-4" method="POST">
                  @csrf
                  <div class="col-12">
                    <label>Email<span class="text-danger">*</span></label>
                    <div class="input-group">
                      <div class="input-group-text"><i class="bi bi-person-fill"></i></div>
                      <input type="email" class="form-control" placeholder="Masukkan Email" name="email" id="email">
                    </div>
                  </div>

                  <div class="col-12">
                    <label>Password<span class="text-danger">*</span></label>
                    <div class="input-group">
                        <div class="input-group-text"><i class="bi bi-lock-fill"></i></div>
                        <input type="password" class="form-control" placeholder="Enter Password" name="password" id="password">
                    </div>
                  </div>

                  <div class="col-12">
                    <button type="submit" class="btn btn-primary px-4 float-end mt-4">Masuk</button>
                  </div>

                </form>
              </div>
            </div>
            <div class="col-md-5 ps-0 d-none d-md-block bg-cover bg-image" style="background-image:url('assets/img/backgrounds/bgoffice.jpg')"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('style')
  <link rel="stylesheet" href="assets/css/auth.css">
@endpush