<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeri;
use App\Models\Model_Buku;
use Intervention\Image\Facades\Image;

class GaleriController extends Controller{
    public function __construct(){
        $this->middleware('auth');
        // $this->middleware('admin');
    }

    public function index(){
        $batas = 2;
        $galeri = Galeri::orderBy('id')->paginate($batas);
        $no = $batas * ($galeri->currentPage() - 1);
        $buku = Model_Buku::all();
        
        return view('galeri.index', compact('galeri', 'no', 'buku'));
    }

    public function create(){
        $buku = Model_Buku::all();
        return view('galeri.create', compact('buku'));
    }

    public function store(Request $request){
        $daftar_pesan =[
            'required' => 'Harap mengisi :attribute inputan!',
        ];

        $this->validate($request, [
            'nama_galeri'=>'required',
            'keterangan'=>'required',
            'foto'=>'required|image|mimes:jpeg,jpg,png'
        ]);
        $galeri = new Galeri;
        $galeri->nama_galeri = $request->nama_galeri;
        $galeri->keterangan = $request->keterangan;
        $galeri->id_buku = $request->id_buku;

        $foto = $request->foto;
        $namafile = time().'.'.$foto->getClientOriginalExtension();

        Image::make($foto)->resize(200,150)->save('thumb/'.$namafile);
        $foto->move('assets/', $namafile);

        $galeri->foto = $namafile;
        $galeri->save();
        return redirect('/galeri')->with('pesan', 'Data galeri berhasil disimpan');
    }

    public function destroy($id){
        $galeri = Galeri::find($id);
        $galeri->delete();
        return redirect('/galeri')->with('pesan', 'Data galeri berhasil dihapus!');
    }

    public function edit($id){
        $galeri = Galeri::find($id);
        $buku = Model_Buku::all();
        return view('galeri.update', compact('galeri', 'buku'));
    }

    public function update(Request $request, $id){
        $daftar_pesan =[
            'required' => 'Harap mengisi :attribute inputan!',
        ];
        
        $this->validate($request, [
            'nama_galeri'=>'required',
            'keterangan'=>'required',
            'foto'=>'required|image|mimes:jpeg,jpg,png'
        ]);

        $galeri = Galeri::find($id);        
        $galeri->nama_galeri = $request->nama_galeri;
        $galeri->keterangan = $request->keterangan;
        $galeri->id_buku = $request->id_buku;

        $foto = $request->foto;
        $namafile = time().'.'.$foto->getClientOriginalExtension();

        Image::make($foto)->resize(200,150)->save('thumb/'.$namafile);
        $foto->move('assets/', $namafile);

        $galeri->foto = $namafile;
        $galeri->save();
        return redirect('/galeri')->with('pesan', 'Data buku berhasil diubah!');
    }
}
