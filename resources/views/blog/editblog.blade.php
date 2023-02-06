@extends('afterlogin.dashboard')
@section('judul_halaman', 'Edit | Blog')
@section('blog', 'active')
@section('halaman_editblog')
<!-- Form Create Blog -->
<div class="text-center mt-5">
    <h1 class="h4 text-gray-900 mb-2">Create A New Blog</h1>
</div>
{{-- menampilkan error validasi --}}
@if (count($errors) > 0)
    <div class="container alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ url('/blog/'.$data->id.'/edit/procces')}}" method="POST" class="container card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
@csrf
    <div class="form-group">
        <label for="title" class="form-label">Title</label>
        <input class="form-control" type="text" name="title" value="{{ $data->title }}">
    </div>
    <div class="form-group">
        <label for="slug" class="form-label">Slug</label>
        <input class="form-control" type="text" name="slug" value="{{ $data->slug }}">
    </div>
    <div class="form-group">
        <label for="content" class="form-label">Content</label>
        <input class="form-control" type="text" name="content" value="{{ $data->content }}">
    </div>
    <div class="form-group">
        <label for="viewer" class="form-label">Viewer</label>
        <input class="form-control" type="text" name="viewer" value="{{ $data->viewer }}">
    </div>
        <button name="submit" type="submit" class="btn btn-primary btn-block">Create</button>
</form>
@endsection