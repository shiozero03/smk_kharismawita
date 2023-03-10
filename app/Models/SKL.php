<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SKL extends Model
{
    use HasFactory;
    protected $table = 's_k_l_s';
    protected $primarykey = 'id';
    protected $fillable = [
        'id_siswa',
        'pai',
        'pkn',
        'indo',
        'mtk',
        'sejarah',
        'inggris',
        'sbk',
        'penjas',
        'sunda',
        'skd',
        'ekobisnis',
        'adm',
        'ipa',
        'dasarprogram',
        'kompetensikeahlian'
    ];
}
