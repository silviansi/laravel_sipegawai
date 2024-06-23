@extends('layouts.base')
@section('title', 'Login')
@section('content')

<div class="wrap">
  <form action="{{ route('login') }}" method="POST">
    @csrf
    <h1>SIPegawai</h1>
    <div class="input-box">
      <input type="text" placeholder="Email" name="email" id="email" required>
      <i class="bx bxs-user"></i>
    </div>
    <div class="input-box">
      <input type="password" placeholder="Password" name="password" id="password" required>
      <i class="bx bxs-lock-alt"></i>
    </div>
    <button type="submit" class="btn">Masuk</button>
  </form>
</div>
@endsection

@push('style')
  <link rel="stylesheet" href="assets/css/auth.css">
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      background: url('{{ asset('assets/img/backgrounds/bg.jpg') }}') no-repeat;
      background-size: cover;
      background-position: center;
    }
  </style>
@endpush