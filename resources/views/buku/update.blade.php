@extends('layouts.app')

@section('content')
        <h4>Edit Data</h4>
        <form method="POST" action="{{route('buku.update', $buku->id)}}">
            @csrf
            <div class="form-floating mb-3">
                <input type="text" class="form-control rounded-3" id="judul" name="judul" 
                value="{{$buku->judul}}"> 
                <label for="judul">Judul</label>                       
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control rounded-3" id="penulis" name="penulis" 
                value="{{$buku->penulis}}"> 
                <label for="penulis">Nama Penulis</label>                       
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control rounded-3" id="harga" name="harga" 
                value="{{$buku->harga}}"> 
                <label for="harga">Harga</label>                       
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="date form-control rounded-3" id="tgl_terbit" 
                name="tgl_terbit" value="{{$buku->tgl_terbit}}"> 
                <label for="tgl_terbit">Tanggal Terbit</label>                       
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
            <a href="/buku" class="btn btn-secondary">Batal</a>
        </form>
    </body>
    <!-- Mengatur tampilan/format tanggal dari bagian belakang/backend -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script>
    $( function() {
        $( ".date" ).datepicker();
    } );
    </script>
@endsection