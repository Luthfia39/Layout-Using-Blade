@extends('layouts.app')

@section('content')
    <h3 class="text-center fw-bold">Tambah Gambar</h3>
    <!-- Notifikasi validasi -->
    @if (count($errors) > 0)
    <ul class="alert alert-danger">
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
    @endif
    <form method="POST" action="{{route('galeri.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-3">
            <label for="nama_galeri">Judul</label>
            <input type="text" class="form-control" name="nama_galeri">
        </div>
        <div class="form-group mb-3">
            <label for="id_buku">Buku</label>    
            <select name="id_buku" class="form-control">
                <option value="" selected>Pilih Buku</option>
                @foreach ($buku as $data)
                <option value="{{$data->id}}">{{$data->judul}}</option>
                @endforeach
            </select>                   
        </div>
        <div class="form-group mb-3">
            <label for="keterangan">Keterangan</label>   
            <textarea name="keterangan" class="form-control"></textarea>                    
        </div>
        <div class="form-group">
            <label for="foto">Upload foto</label>  
            <input type="file" class="form-control" name="foto">                     
        </div>
        <button type="submit" class="btn btn-primary mt-5">Simpan</button>
        <a href="/galeri" class="btn btn-secondary mt-5 ms-3">Batal</a>
    </form>
@endsection