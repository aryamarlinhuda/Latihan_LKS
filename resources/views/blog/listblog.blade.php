@extends('afterlogin.dashboard')
@section('judul_halaman', 'List | Blog')
@section('blog', 'active')
<!-- Tampilan List Blog -->
@section('halaman_listblog')
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <!-- FORM PENCARIAN -->
    <div class="pb-3">
        @if(session('success'))
        <div class="alert alert-success alert-block dismissible show fade mt-1">
            <div class="alert-body">
                {{session('success')}}
            </div>
        </div>
        @endif
        @if(session('success_edit'))
        <div class="alert alert-success alert-block dismissible show fade mt-1">
            <div class="alert-body">
                {{session('success_edit')}}
            </div>
        </div>
        @endif
        @if(session('success_delete'))
        <div class="alert alert-success alert-block dismissible show fade mt-1">
            <div class="alert-body">
                {{session('success_delete')}}
            </div>
        </div>
        @endif
        <!-- <form class="d-flex" action="{{ url('mahasiswa') }}" method="get">
            <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
            <button class="btn btn-secondary" type="submit">Cari</button>
        </form> -->
        @foreach ($data as $item)
        <div class="card text-white bg-info m-3">
            <div class="card-body">
                <h5 class="card-title">{{ $item->title }}</h5>
                <p class="card-text">{{ $item->content }}</p>
                <a href="{{ url('blog/'.$item->id.'/edit') }}" class="btn btn-warning ms-2">Edit</a>
                <form action="{{ url('/blog/'.$item->id.'/delete')}}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" name="submit" class="btn btn-danger">Delete</button>
                </form>
                <div class="text-muted mt-2">{{ $item->viewer }} Viewers</div>
            </div>
        </div>
        @endforeach
        <a href="/blog/create" class="btn btn-success">Create New Blog</a>
    </div>
</div>
@endsection