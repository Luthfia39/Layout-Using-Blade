@extends("/layout/home")
@section("style")
<style>
    .link{
        text-decoration: dashed;
    }
    .sakura{
        width: 7cm;
    }
</style>
@endsection
@section("content")
    <p class="display-6 pb-1">Bunga Mawar</p><br> 
    <img class="sakura pb-3" src="/assets/img-mawar.png">
    <p>
        Dilansir dari <span><a class="link" href="https://id.wikipedia.org/wiki/Bunga">id.wikipedia.org</a></span>, 
        Mawar adalah adalah tumbuhan perdu, pohonnya berduri, bunganya berbau wangi dan berwarna indah, terdiri atas 
        daun bunga yang bersusun;[2] meliputi ratusan jenis, tumbuh tegak atau memanjat, batangnya berduri, bunganya 
        beraneka warna, seperti merah, putih, merah jambu, merah tua, dan berbau harum.[1] Mawar liar terdiri dari 100 
        spesies lebih, kebanyakan tumbuh di belahan bumi utara yang berudara sejuk. Spesies mawar umumnya merupakan 
        tanaman semak yang berduri atau tanaman memanjat yang tingginya bisa mencapai 2 sampai 5 meter. Walaupun jarang 
        ditemui, tinggi tanaman mawar yang merambat di tanaman lain bisa mencapai 20 meter.
    </p>
@endsection