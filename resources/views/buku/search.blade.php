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
</html>