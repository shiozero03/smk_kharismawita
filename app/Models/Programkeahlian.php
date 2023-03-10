<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programkeahlian extends Model
{
    use HasFactory;
    protected $table = 'programkeahlians';
    protected $primarykey = 'id';
    protected $fillable = [
        'gambar',
        'nama',
        'keterangan'
    ];
}
