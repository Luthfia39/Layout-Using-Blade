<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model{
    protected $table = 'comment';
    // use HasFactory;

    public function commentar(){
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
}
