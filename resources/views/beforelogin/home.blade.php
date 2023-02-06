@extends('beforelogin.starter')
@section('judul_halaman', 'Home')
@section('home', 'active')
<!-- Hero Banner -->
@section('halaman_home')
<div>
  @if(session('success'))
    <div class="alert alert-success alert-block dismissible show fade mt-3">
        <div class="alert-body">
            {{session('success')}}
        </div>
    </div>
  @endif
</div>
@endsection