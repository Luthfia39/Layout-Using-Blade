<?php

namespace App\Http\Controllers;

use App\Models\account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class accountController extends Controller{
    public function index(){
        $batas = 3;
        $visitor = account::orderBy('id', 'desc')->paginate($batas);
        $no = $batas * ($visitor->currentPage() - 1);
        
        return view('user.index', compact('visitor', 'no'));
    }

    public function create(){
        return view('user.create');
    }

    public function store(Request $request){
        $daftar_pesan =[
            'required' => 'Harap mengisi :attribute inputan!',
            'max' => 'Inputan anda melebihi :max karakter',
        ];

        // validasi
        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|string',
            'level' => 'required|string',
        ], $daftar_pesan);

        // input secara langsung tanpa validasi
        $visitor = new account();
        $visitor->name = $request->name;
        $visitor->email = $request->email;
        $visitor->password = Hash::make($request->password);
        $visitor->level = $request->level;
        $visitor->save();
        return redirect('/user')->with('pesan', 'Data yang anda masukkan berhasil disimpan!');
    }

    public function destroy($id){
        $visitor = account::find($id);
        $visitor->delete();
        return redirect('/user')->with('pesan', 'Data berhasil dihapus!');
    }

    public function edit($id){
        $visitor = account::find($id);
        return view('user.update', compact('visitor'));
    }

    public function update(Request $request, $id){
        $visitor = account::find($id);        
        $visitor->name = $request->name;
        $visitor->email = $request->email;
        $visitor->password = $request->password;
        $visitor->level = $request->level;
        $visitor->save();
        return redirect('/user')->with('pesan', 'Data berhasil diubah!');
    }
}
