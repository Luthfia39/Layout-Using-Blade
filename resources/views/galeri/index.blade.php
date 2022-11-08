@extends('layouts.app')

@section('content')
    <!-- Flash Message -->
    @if(Session::has('pesan'))
        <div class="alert alert-success">
            {{Session::get('pesan')}}
        </div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>id</th>
                <th>Nama</th>
                <th>Nama Buku</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($galeri as $data)
            @foreach ($buku as $b)
            <tr>
                <td>{{ ++$no }}</td>
                <td>{{ $data->nama_galeri }}</td>
                <!-- @foreach ($buku as $b) -->
                <td>{{ $b->judul }}</td>
                <!-- @endforeach -->
                <td><img src="{{ asset('thumb/'.$data->foto)}}" style="width: 50%;"></td>
                <td>
                    <form action="{{route('galeri.destroy',$data->id)}}" method="POST">
                        @csrf
                        <button onclick="return confirm('Yakin akan menghapus?')" 
                        class="btn btn-primary">Hapus</button>
                    </form>
                    <form action="{{route('galeri.edit',$data->id)}}" method="POST">
                        @csrf
                        <button class="btn btn-primary">Edit</button>
                    </form>
                </td>
            </tr>
            @endforeach
            @endforeach
        </tbody>
    </table>
@endsection