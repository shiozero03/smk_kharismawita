<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unduhan_siswa extends Model
{
    use HasFactory;
    protected $table = 'unduhan_siswas';
    protected $primarykey = 'id';
    protected $fillable =[
        'id_siswa',
        'type_dokumen',
        'dokumen',
        'judul'
    ];
}
