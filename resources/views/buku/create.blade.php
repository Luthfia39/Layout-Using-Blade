@extends('layouts.app')

@section('content')
        <h4>Tambah Buku</h4>
        <!-- Notifikasi validasi -->
        @if (count($errors) > 0)
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
        <form method="POST" action="{{route('buku.store')}}">
            @csrf
            <div class="form-floating mb-3">
                <input type="text" class="form-control rounded-3" id="judul" name="judul" 
                value="{{old('judul')}}"> 
                <label for="judul">Judul</label>                       
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control rounded-3" id="penulis" name="penulis" 
                value="{{old('penulis')}}"> 
                <label for="penulis">Nama Penulis</label>                       
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control rounded-3" id="harga" name="harga" 
                value="{{old('harga')}}"> 
                <label for="harga">Harga</label>                       
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="date form-control rounded-3" id="tgl_terbit" 
                name="tgl_terbit" value="{{old('tgl_terbit')}}"> 
                <label for="tgl_terbit">Tanggal Terbit</label>                       
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
            <a href="/home" class="btn btn-secondary ms-3">Batal</a>
        </form>
    </body>
    <!-- Mengatur tampilan/format tanggal dari bagian belakang/backend -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script>
    $( function() {
        $(".date" ).datepicker();
    } );
    </script>
@endsection