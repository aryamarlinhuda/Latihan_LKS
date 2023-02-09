@extends('afterlogin.dashboard')
@section('judul_halaman', 'Detail | Blog')
@section('blog', 'active')
@section('halaman_detailblog')
<div class="container">
    <h2 class="my-3">{{ $data->title }}</h2>
    <p class="my-2">{{ $data->content }}</p>
</div>
@endsection