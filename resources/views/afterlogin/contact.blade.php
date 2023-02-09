@extends('afterlogin.dashboard')
@section('judul_halaman', 'Contact')
@section('contact', 'active')
@section('halaman_contact')
<div class="container my-5">
    <h2 class="text-center justify-content-center border-bottom py-1">Contact Us</h2>
</div>
<div class="container">
    <div class="row">
        <div class="col-4 thumb text-center my-4">
            <img src="../komponen/facebook.png" class="img-responsive" height="160" width="160" alt="">
            <h3 class="mt-3">Facebook</h3>
            <p class="mt-2">Hubungi kami lewat Facebook</p>
            <a href="https://www.facebook.com/arya.marlinhuda.1" target="_blank" class="btn btn-primary">Klik Disini!</a>
        </div>
        <div class="col-4 thumb text-center my-4">
            <img src="../komponen/twitter.png" class="img-responsive" height="160" width="160" alt="">
            <h3 class="mt-3">Twitter</h3>
            <p class="mt-2">Hubungi kami lewat Twitter</p>
            <a href="https://twitter.com/aryyymh" target="_blank" class="btn btn-primary">Klik Disini!</a>
        </div>
        <div class="col-4 thumb text-center my-4">
            <img src="../komponen/whatsapp.png" class="img-responsive" height="160" width="160" alt="">
            <h3 class="mt-3">Whatsapp</h3>
            <p class="mt-2">Hubungi kami lewat Whatsapp</p>
            <a href="https://wa.me/+6289618643719" target="_blank" class="btn btn-primary">Klik Disini!</a>
        </div>
    </div>
</div>
@endsection