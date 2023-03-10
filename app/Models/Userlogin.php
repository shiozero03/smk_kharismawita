<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userlogin extends Model
{
    use HasFactory;
    protected $table = 'userlogins';
    protected $primarykey = 'id';
    protected $fillable = [
        'email',
        'password',
        'type',
        'nama',
        'nip',
        'nisn',
        'nis',
        'ttl',
        'kompetensi_keahlian',
        'agama', 
        'anak_ke',
        'alamat', 
        'telepon',
        'nama_ayah',
        'nama_ibu',
        'alamat_orangtua',
        'telepon_orangtua',
        'pekerjaan_ayah',
        'pekerjaan_ibu',
        'tingkat',
        'kelas_sekarang',
        'masuk_tahun',
        'jabatan',
        'status_kelulusan',
        'is_admin'
    ];
    protected $hidden = [
        'password'
    ];
}
