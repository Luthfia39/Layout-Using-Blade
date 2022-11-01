@extends('layouts.app')

@section('content')
        @if(count($data_buku))
        <div class="alert alert-success">
            Ditemukan <strong>{{count($data_buku)}}</strong> 
            data dengan kata : <strong>{{$cari}}</strong>
        </div>
        @else
        <div class="alert alert-warning">
            <h4>Data {{$cari}} tidak ditemukan</h4>
        </div>
        @endif
        <h1 class="text-center">Data Buku</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Judul Buku</th>
                    <th>Penulis</th>
                    <th>Tgl. Terbit</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data_buku as $value)
                <tr>
                    <td>{{++$no}}</td>
                    <td>{{$value->judul}}</td>
                    <td>{{$value->penulis}}</td>
                    <!-- Mengatur tampilan tanggal dibagian front -->
                    <td>{{$value->tgl_terbit->format('d/m/Y')}}</td>
                    <td>{{"Rp".number_format($value->harga, 0, ',', '.')}}</td>
                    <td>
                        <form action="{{route('buku.destroy',$value->id)}}" method="POST">
                            @csrf
                            <button onclick="return confirm('Yakin akan menghapus?')" 
                            class="btn btn-primary">Hapus</button>
                        </form>
                        <form action="{{route('buku.edit',$value->id)}}" method="POST">
                            @csrf
                            <button class="btn btn-primary">Edit</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div>{{$data_buku->links()}}</div>
        <a href="/buku" class="col-2 btn btn-warning">Kembali</a>
    </body>
@endsection