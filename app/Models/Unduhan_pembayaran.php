<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unduhan_pembayaran extends Model
{
    use HasFactory;
    protected $table = 'unduhan_pembayarans';
    protected $primarykey = 'id';
    protected $fillable =[
        'id_siswa',
        'dokumen',
        'judul'
    ];
}
