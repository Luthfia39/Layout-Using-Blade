<!DOCTYPE html>
<html>
    <head>
        <title>Laravel - Model</title>
        <!-- CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" 
        crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" 
        crossorigin="anonymous"></script>
    </head>
    <body class="container pt-5">
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
</html>