@extends('layouts.app')

@section('content')
    <h2 class="mb-5 fw-bold text-center">Detail Buku :</h2>
    <h3 class="mb-4 fw-bold">Judul Buku : {{ $buku->judul }}</h3>
    <h5 class="mb-3">Daftar Gambar : </h5>
    <div class="row mb-5">
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
    <center><hr></center>
    <div class="row mt-3 mb-5">
        <h3 class="text-center">Komentar </h3>
        @foreach($comments as $comment)
        <div class="card w-75 mb-3" style="margin: 0 auto;">
            <div class="card-body">
                <h5 class="card-title fw-bold">{{$comment->commentar->name}}</h5>
                {{$comment->komentar}}
            </div>
        </div>
        @endforeach
    </div>
    <center><hr></center>
    <div class="row mt-3">
        <h3 class="text-center">Tambah Komentar </h3>
        <form method="POST" action="{{route('comment.store')}}">
            @csrf
            <div class="form mb-3">
                <textarea class="form-control rounded-3" id="komentar" name="komentar" 
                value="{{old('komentar')}}" placeholder="Masukkan komentar" rows="6"> </textarea>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control rounded-3 visually-hidden" id="id_buku" name="id_buku" 
                value="{{ $buku->id }}">                     
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control rounded-3 visually-hidden" id="id_user" 
                name="id_user" value="{{ Auth::user()->id }}">                      
            </div>
            <button type="submit" class="btn btn-primary">Post</button>
            <a href="/home" class="btn btn-secondary ms-2">Kembali</a>
        </form>
    </div>
@endsection