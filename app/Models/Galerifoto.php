<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galerifoto extends Model
{
    use HasFactory;
    protected $table = 'galerifotos';
    protected $primarykey = 'id';
    protected $fillable = [
        'gambar',
        'judul'
    ];
}
