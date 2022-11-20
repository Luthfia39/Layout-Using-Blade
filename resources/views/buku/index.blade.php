@extends('layouts.app')

@section('content')
    @if (Auth::check() && Auth::user()->level == 'admin')
    <!-- Flash Message -->
    @if(Session::has('pesan'))
        <div class="alert alert-success">
            {{Session::get('pesan')}}
        </div>
    @endif
    <h1 class="text-center">Data Buku</h1>
    <form action="{{route('buku.search')}}" method="GET" 
    class="d-flex justify-content-center mb-3">
        @csrf
        <input type="text" name="kata" class="form form-control" 
        placeholder="Cari" style="width: 30%;">
    </form>
    <table class="table table-bordered text-center" style="border: black;">
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
                    <form action="{{route('buku.edit',$value->id)}}" method="POST" method="POST" class="p-1">
                        @csrf
                        <button class="btn btn-primary">Edit</button>
                    </form>
                    <form action="{{ route('buku.detail', $value->buku_seo) }}" method="POST" method="POST" class="pb-1">
                        @csrf
                        <button class="btn btn-primary">Detail</button>
                    </form>
                </td>
            </tr>
            @endforeach
            <tr>
                <td colspan="4" class="text-end fw-bold">Total Harga</td>
                <td colspan="2" class="text-start fw-bold">{{"Rp".number_format($price, 0, ',', '.')}}</td>
            </tr>
            <tr>
                <td colspan="4" class="text-end fw-bold">Total Data</td>
                <td colspan="2" class="text-start fw-bold">{{$amount}}</td>
            </tr>
        </tbody>
    </table>
    <div>{{$data_buku->links()}}</div>
    <a href="{{route('buku.create')}}" class="btn btn-primary" role="button">
        Tambah Buku
    </a>
    @else
    <p class="display-6 text-center mt-5">Anda tidak dapat mengakses laman ini</p>
    @endif
@endsection