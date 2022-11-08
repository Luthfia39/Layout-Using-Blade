@extends('layouts.app')

@section('content')
        <h4>Edit Data</h4>
        <form method="POST" action="{{route('user.update', $visitor->id)}}">
            @csrf
            <div class="form-floating mb-3">
                <input type="text" class="form-control rounded-3" id="name" name="name" 
                value="{{$visitor->name}}"> 
                <label for="name">Name</label>                       
            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control rounded-3" id="email" name="email" 
                value="{{$visitor->email}}"> 
                <label for="email">Email</label>                       
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control rounded-3" id="password" name="password" 
                value="{{$visitor->password}}"> 
                <label for="password">Password</label>                       
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control rounded-3" id="level" 
                name="level" value="{{$visitor->level}}"> 
                <label for="level">Level</label>                       
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="/home" class="btn btn-secondary">Batal</a>
        </form>
    </body>
@endsection