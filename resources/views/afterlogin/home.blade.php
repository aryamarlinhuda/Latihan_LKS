@extends('afterlogin.dashboard')
@section('judul_halaman', 'Welcome | Home')
@section('home', 'active')
@section('halaman_home')
<div class="container">
    @if(session('success'))
    <div class="alert alert-success alert-block dismissible show fade mt-3">
        <div class="alert-body">
            {{session('success')}}
        </div>
    </div>
    @endif
    <div class="p-5 mb-4 bg-light rounded-3">
        <hr>
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">Welcome Back !</h1>
            <p class="col-md-8 fs-4">Halo <b>{{ Auth::user()->name }}!</b> Terimakasih anda sudah mempercayai kami. Setelah login, anda sudah bisa menggunakan fasilitas yang ada website ini. Silahkan anda bisa memulainya dengan membaca blog sudah kami sediakan. :)</p>
            <a href="/blog" class="btn btn-primary btn-lg">Let's Read!</a>
        </div>
        <hr>
        <div class="row align-items-md-stretch justify-content-center mt-3">
            <div class="col-md-6">
                <div class="h-100 p-5 bg-light border rounded-3">
                <h2>Contact Us!</h2>
                <p>Jika anda memiliki kritik ataupun saran, jangan segan untuk menghubungi kami.</p>
                <a href="/contact-us" class="btn btn-primary">Contact Us!</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection