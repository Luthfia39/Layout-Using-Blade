@extends("/layout/home")
@section("style")
<style>
    .link{
        text-decoration: dashed;
    }
    .melati{
        width: 7cm;
    }
</style>
@endsection
@section("content")
    <p class="display-6 pb-3">Bunga Melati</p><br> 
    <img class="melati" src="/assets/img-melati.png" >
    <p>
        Dilansir dari <span><a class="link" href="https://id.wikipedia.org/wiki/Bunga">id.wikipedia.org</a></span>, 
        Melati merupakan tanaman bunga hias berupa perdu berbatang tegak yang hidup menahun. Melati merupakan genus 
        dari semak dan tanaman merambat dalam keluarga zaitun (Oleaceae). Terdiri dari sekitar 200 spesies tumbuhan 
        asli daerah beriklim tropis dan hangat dari Eurasia, Australasia dan Oseania, melati secara luas dibudidayakan 
        untuk aroma khas bunganya yang harum. Di Indonesia, salah satu jenis melati telah dipilih menjadi "puspa bangsa" 
        atau bunga simbol nasional yaitu melati putih (Jasminum sambac), karena bunga ini melambangkan kesucian dan 
        kemurnian, serta dikaitkan dengan berbagai tradisi dari banyak suku di negara ini.  
    </p>
@endsection