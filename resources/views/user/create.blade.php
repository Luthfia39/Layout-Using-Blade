@extends('layouts.app')

@section('content')
        <h3 class="fw-bold mb-3">Tambah Data User</h3>
        <!-- Notifikasi validasi -->
        @if (count($errors) > 0)
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
        <form method="POST" action="{{route('user.store')}}">
            @csrf
            <div class="form-floating mb-3">
                <input type="text" class="form-control rounded-3" id="name" name="name" 
                value="{{old('name')}}"> 
                <label for="name">Name</label>                       
            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control rounded-3" id="email" name="email" 
                value="{{old('email')}}"> 
                <label for="email">Email</label>                       
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control rounded-3" id="password" name="password" 
                value="{{old('password')}}"> 
                <label for="password">Password</label>                       
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control rounded-3" id="level" 
                name="level" value="{{old('level')}}"> 
                <label for="level">Level</label>                       
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="/home" class="btn btn-secondary ms-2">Batal</a>
        </form>
    </body>
@endsection