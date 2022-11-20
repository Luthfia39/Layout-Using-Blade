@extends('layouts.app')

@section('content')
    <h2 class="mb-5 fw-bold text-center">Detail Buku :</h2>
    <h3 class="mb-4 fw-bold">Judul Buku : {{ $buku->judul }}</h3>
    <h5 class="mb-3">Daftar Gambar : </h5>
    <div class="row">
        @foreach ($galeri as $data)
        <div class="col">
            <div class="d-flex flex-column text-center">
                <a href="{{ asset('thumb/'.$data->foto) }}" data-lightbox="image-1" data-title="{{ $data->keterangan }}">
                    <img src="{{ asset('thumb/'.$data->foto) }}" style="width: 200px; height: 150px;">
                </a>
                <p class="mt-2">{{ $data->nama_galeri }}</p>
            </div>
        </div>
        @endforeach
        <div>{{$galeri->links()}}</div>
    </div>
    <a href="/galeri" class="btn btn-secondary mt-3 mb-3">Kembali</a>
@endsection