@extends('layouts.app')

@section('content')
        <h4 class="fw-bold text-center">Edit Data</h4>
        <form method="POST" action="{{route('galeri.update', $galeri->id)}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-3">
                <label for="nama_galeri">Judul</label>
                <input type="text" class="form-control" name="nama_galeri" value="{{$galeri->nama_galeri}}">
            </div>
            <div class="form-group mb-3">
                <label for="id_buku">Buku</label>    
                <select name="id_buku" class="form-control">
                    @foreach ($buku as $b)
                    
                    <option value="{{$galeri->id_buku}}">{{$b->judul}}</option>
                    @endforeach
                </select>                   
            </div>
            <div class="form-group mb-3">
                <label for="keterangan">Keterangan</label>   
                <textarea name="keterangan" class="form-control" value="{{$galeri->keterangan}}"></textarea>                    
            </div>
            <div class="form-group">
                <label for="foto">Upload foto</label>  
                <input type="file" class="form-control" name="foto" >                     
            </div>
            <button type="submit" class="btn btn-primary mt-5">Simpan</button>
            <a href="/galeri" class="btn btn-secondary mt-5 ms-3">Batal</a>
        </form>
    </body>
@endsection