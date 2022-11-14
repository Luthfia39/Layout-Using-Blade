@extends('layouts.app')

@section('content')
    <p class="display-6 text-center fw-bold mt-3">Selamat Datang!</p>
    <h2 class="text-center fw-bold">Isi Web :</h2>
    <div class="row">
        <div class="col">
            <img src="/assets/book.png" class="img-responsive center-block d-block mx-auto" style="height: 375px;">
            <p class="fw-bold text-center"><br>Data Buku</p>
        </div>
        <div class="col">
            <img src="/assets/image.png" class="img-responsive center-block d-block mx-auto" style="width: 500px;">
            <p class="fw-bold text-center">Data Gambar</p>
        </div>
    </div>
    <h3 class="text-center m-5"> 
        Web ini menampilkan data yang tersimpan dari <i>Database</i>. Untuk dapat melihat data tersebut, pengunjung
        diharuskan untuk <i>login</i> terlebih dahulu. Apabila pengunjung belum terdaftar, pengunjung dapat melakukan registrasi
        terlebih dahulu. 
    </h3>
@endsection