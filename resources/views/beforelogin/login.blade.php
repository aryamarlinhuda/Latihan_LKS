@extends('beforelogin.starter')
@section('judul_halaman', 'Login')
<!-- Form Login -->
@section('halaman_login')
<div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
        <div class="card-body p-0">
            <!-- Layout Login -->
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Login In Here!</h1>
                        </div>
                        {{-- menampilkan error validasi --}}
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <!-- Form Login -->
                        <form action="{{ url('/home/login/procces') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="email" class="form-label">Email</label>
                            <input class="form-control" type="email" name="email" value="{{Session::get('email')}}">
                        </div>
                        <div class="form-group">
                            <label for="password" class="form-label">Password</label>
                            <input class="form-control" type="password" name="password">
                        </div>
                            <button name="submit" type="submit" class="btn btn-primary btn-block">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection