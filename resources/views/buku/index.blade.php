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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </head>
    <body class="container pt-5">
        @section('dataview')
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
                <tr>
                    <td colspan="4" class="text-end fw-bold">Total Harga</td>
                    <td class="fw-bold">{{"Rp".number_format($price, 0, ',', '.')}}</td>
                </tr>
                <tr>
                    <td colspan="4" class="text-end fw-bold">Total Data</td>
                    <td class="fw-bold">{{$amount}}</td>
                </tr>
            </tbody>
        </table>
        <div>{{$data_buku->links()}}</div>
        <a href="{{route('buku.create')}}" class="btn btn-primary" role="button">
            Tambah Buku
        </a>
        @endsection
    </body>
</html>