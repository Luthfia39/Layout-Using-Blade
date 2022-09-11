@extends("/layout/home")
@section("style")
<style>
    .link{
        text-decoration: dashed;
    }
    .sakura{
        width: 9cm;
    }
</style>
@endsection
@section("content")
    <p class="display-6 pb-3">Bunga Sakura</p><br> 
    <img class="sakura pb-3" src="/assets/img-sakura.png">
    <p>
        Dilansir dari <span><a class="link" href="https://id.wikipedia.org/wiki/Bunga">id.wikipedia.org</a></span>, 
        Pohon Sakura adalah salah satu pohon yang tergolong dalam familia Rosaceae, genus Prunus sejenis dengan 
        pohon prem, persik, atau aprikot, tetapi secara umum sakura digolongkan dalam subgenus sakura. Asal usul 
        kata "sakura" adalah kata "saku" (bahasa Jepang untuk "mekar") ditambah akhiran yang menyatakan bentuk 
        jamak "ra". Dalam bahasa Inggris, bunga sakura disebut cherry blossoms. Warna bunga tergantung pada spesiesnya, 
        ada yang berwarna putih dengan sedikit warna merah jambu, kuning muda, merah jambu, hijau muda atau merah menyala.
        Pohon sakura berbunga setahun sekali, di pulau Honshu, kuncup bunga sakura jenis someiyoshino mulai terlihat di akhir 
        musim dingin dan bunganya mekar di akhir bulan Maret sampai awal bulan April di saat cuaca mulai hangat. 
    </p>
@endsection