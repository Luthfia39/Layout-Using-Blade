@extends('layouts.app')

@section('content')
    @if (Auth::check() && Auth::user()->level == 'admin')
    <!-- Flash Message -->
    @if(Session::has('pesan'))
        <div class="alert alert-success">
            {{Session::get('pesan')}}
        </div>
    @endif
    <h1 class="text-center mb-3">Data User</h1>
    <table class="table table-bordered text-center" style="border: black;">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Level</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($visitor as $value)
            <tr>
                <td>{{++$no}}</td>
                <td>{{$value->name}}</td>
                <td>{{$value->email}}</td>
                <td>{{$value->level}}</td>
                <td>
                    <form action="{{route('user.destroy',$value->id)}}" method="POST">
                        @csrf
                        <button onclick="return confirm('Yakin akan menghapus?')" 
                        class="btn btn-primary">Hapus</button>
                    </form>
                    <form action="{{route('user.edit',$value->id)}}" method="POST" class="p-1">
                        @csrf
                        <button class="btn btn-primary">Edit</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div>{{$visitor->links()}}</div>
    <a href="{{route('user.create')}}" class="btn btn-primary" role="button">
        Tambah Data
    </a>
    @else
    <p class="display-6 text-center mt-5">Silahkan <i>Login</i> sebagai Admin Untuk Mengakses Laman ini</p>
    @endif
@endsection