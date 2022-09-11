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
    <p class="display-6 pb-1">Bunga Anggrek</p><br> 
    <img class="sakura pb-3" src="/assets/img-anggrek.png">
    <p>
        Dilansir dari <span><a class="link" href="https://id.wikipedia.org/wiki/Bunga">id.wikipedia.org</a></span>, 
        Suku anggrek (bahasa Latin: Orchidaceae) merupakan satu suku tumbuhan berbunga dengan anggota jenis terbanyak. 
        Jenis-jenisnya tersebar luas dari daerah tropika basah hingga wilayah sirkumpolar, meskipun sebagian besar 
        anggotanya ditemukan di daerah tropika. Kebanyakan anggota suku ini hidup sebagai epifit, terutama yang berasal 
        dari daerah tropika. Anggrek di daerah beriklim sedang biasanya hidup di tanah dan membentuk umbi sebagai cara 
        beradaptasi terhadap musim dingin. Organ-organnya yang cenderung tebal dan "berdaging" (sukulen) membuatnya tahan 
        menghadapi tekanan ketersediaan air. Anggrek epifit dapat hidup dari embun dan udara lembap. 
    </p>
@endsection