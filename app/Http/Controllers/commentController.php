<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class commentController extends Controller{
    public function store(Request $request){
        $daftar_pesan =[
            'required' => 'Harap mengisi :attribute inputan!',
        ];

        // validasi
        $this->validate($request, [
            'komentar' => 'required|string',
        ], $daftar_pesan);

        $comment = new Comment();
        $comment->id_user = $request->id_user;
        $comment->id_buku = $request->id_buku;
        $comment->komentar = $request->komentar;
        $comment->save();
        return back();
    }
}
