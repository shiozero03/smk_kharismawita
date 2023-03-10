<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ekstrakuriluler extends Model
{
    use HasFactory;
    protected $table = 'ekstrakurilulers';
    protected $primarykey = 'id';
    protected $fillable = [
        'gambar',
        'nama',
        'keterangan'
    ];
}
