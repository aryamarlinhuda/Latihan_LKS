@extends('app.starter')
@section('judul_halaman', 'List | Blog')
@section('blog', 'active')
<!-- Tampilan List Blog -->
@section('halaman_listblog')
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <!-- FORM PENCARIAN -->
    <div class="pb-3">
        <form class="d-flex" action="{{ url('mahasiswa') }}" method="get">
            <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
            <button class="btn btn-secondary" type="submit">Cari</button>
        </form>
        <div class="card text-white bg-info m-3">
            <div class="card-body">
                <h5 class="card-title">Info card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
        <a href="/blog/create" class="btn btn-success">Create New Blog</a>
    </div>
</div>
@endsection