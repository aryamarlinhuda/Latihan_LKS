@extends('beforelogin.starter')
@section('judul_halaman', 'Home')
@section('home', 'active')
@section('halaman_home')
  <div class="container col-xxl-8 px-4 py-5">
    <!-- Alert Success -->
    @if(session('success'))
    <div class="alert alert-success alert-block dismissible show fade mt-3">
        <div class="alert-body">
            {{session('success')}}
        </div>
    </div>
    @endif
    <!-- Hero Banner -->
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="komponen/banner.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3">Website Baca dan Membuat Blog!</h1>
        <p class="lead">Website ini menyediakan fasilitas untuk membaca berbagai macam blog yang anda inginkan. Kami juga menyediakan fasilitas untuk anda jika ingin membuat blog anda sendiri. <b>Sebelum membaca atau membuat blog, silahkan anda login terlebih dahulu.</b></p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <a href="/home/login" class="btn btn-primary btn-lg px-4 me-md-2">Login</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection