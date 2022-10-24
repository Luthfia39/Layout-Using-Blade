<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Model_Buku extends Model {
    // deklarasi nama tabel
    protected $table = 'buku';

    protected $dates = ['tgl_terbit'];
}