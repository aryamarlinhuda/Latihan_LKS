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
    <div class="justify-content-center">
        <h1>Welcome Back !</h1>
        <h3>Halo {{ Auth::user()->name }}</h3>
    </div>
</div>
@endsection