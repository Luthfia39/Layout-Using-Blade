@extends('layouts.app')

@section('content')
    @if (Auth::check() && Auth::user()->level == 'admin')
    <!-- Flash Message -->
    @if(Session::has('pesan'))
        <div class="alert alert-success">
            {{Session::get('pesan')}}
        </div>
    @endif
    <h3 class="fw-bold mb-5 text-center"> Data Gambar </h3>
    <table class="table table-bordered text-center" style="border: black;">
        <thead>
            <tr>
                <th>id</th>
                <th>Nama Gambar</th>
                <th>Nama Buku</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($galeri as $data)
            <tr>
                <td>{{ ++$no }}</td>
                <td>{{ $data->nama_galeri }}</td>
                @foreach ($buku as $b)
                @if ($b->id == $data->id_buku)
                <td>{{ $b->judul }}</td>
                @endif
                @endforeach
                <td><img src="{{ asset('thumb/'.$data->foto)}}" style="width: 50%;"></td>
                <td>
                    <form action="{{route('galeri.destroy',$data->id)}}" method="POST">
                        @csrf
                        <button onclick="return confirm('Yakin akan menghapus?')" 
                        class="btn btn-danger">Hapus</button>
                    </form>
                    <form action="{{route('galeri.edit',$data->id)}}" method="POST" class="p-1">
                        @csrf
                        <button class="btn btn-warning">Edit</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div>{{$galeri->links()}}</div>
    <a href="{{route('galeri.create')}}" class="btn btn-primary" role="button">
        Tambah Data
    </a>
    @else
    <p class="display-6 text-center mt-5">Anda tidak dapat mengakses laman ini</p>
    @endif
@endsection