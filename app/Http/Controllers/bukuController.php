<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use App\Models\Model_Buku;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class bukuController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        // $this->middleware('admin');
    }

    public function index(){
        $batas = 3;
        $data_buku = Model_Buku::orderBy('id', 'desc')->paginate($batas);
        $no = $batas * ($data_buku->currentPage() - 1);
        // menghitung jumlah data di tabel
        $amount = DB::table('buku')->count();
        // menghitung total harga
        $price = DB::table('buku')->sum('harga');
        
        return view('buku.index', compact('data_buku', 'amount', 'price', 'no'));
    }

    public function create(){
        return view('buku.create');
    }

    public function store(Request $request){
        $daftar_pesan =[
            'required' => 'Harap mengisi :attribute inputan!',
            'max' => 'Inputan anda melebihi :max karakter',
        ];

        // validasi
        $this->validate($request, [
            'judul' => 'required|string',
            'penulis' => 'required|string|max:30',
            'harga' => 'required|numeric',
            'tgl_terbit' => 'required|date',
        ], $daftar_pesan);

        // input secara langsung tanpa validasi
        $buku = new Model_Buku();
        $buku->judul = $request->judul;
        $buku->buku_seo = Str::slug($request->judul, '-');
        $buku->penulis = $request->penulis;
        $buku->harga = $request->harga;
        $buku->tgl_terbit = $request->tgl_terbit;
        $buku->save();
        return redirect('/home')->with('pesan', 'Data yang anda masukkan berhasil disimpan!');
    }

    public function destroy($id){
        $buku = Model_Buku::find($id);
        $buku->delete();
        return redirect('/home')->with('pesan', 'Data buku berhasil dihapus!');
    }

    public function edit($id){
        $buku = Model_Buku::find($id);
        return view('buku.update', compact('buku'));
    }

    public function update(Request $request, $id){
        $buku = Model_Buku::find($id);        
        $buku->judul = $request->judul;
        $buku->penulis = $request->penulis;
        $buku->harga = $request->harga;
        $buku->tgl_terbit = $request->tgl_terbit;
        $buku->save();
        return redirect('/home')->with('pesan', 'Data buku berhasil diubah!');
    }

    public function search(Request $request){
        $batas = 5;
        $cari = $request->kata;
        $data_buku = Model_Buku::where('judul','like',"%".$cari."%")
        ->orwhere('penulis','like',"%".$cari."%")->paginate($batas);
        $no = $batas * ($data_buku->currentPage() - 1);
        
        return view('buku.search', compact('data_buku', 'no', 'cari'));
    }

    public function galbuku($judul){
        $buku = Model_Buku::where('buku_seo', $judul)->first();
        $galeri = $buku->photos()->orderBy('id', 'desc')->paginate(2);
        $comments = $buku->comment()->orderBy('id')->get();
        return view('buku.detail', compact('buku', 'galeri', 'comments'));
    }

    public function likeBuku(Request $request, $id){
        $buku = Model_Buku::find($id);
        $buku->increment('suka');
        return back();
    }
}