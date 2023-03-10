<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    use HasFactory;
    protected $table = 'profils';
    protected $primarykey = 'id';
    protected $fillable = [
       'nama_sekolah',
       'npsn',
       'jenjang_pendidikan',
       'status_sekolah',
       'alamat_sekolah',
       'rt_rw',
       'kode_pos',
       'kelurahan',
       'kecamatan',
       'kabupaten_kota',
       'provinsi',
       'negara',
       'lintang',
       'bujur',
       'telepon',
       'fax',
       'email',
       'website',
       'waktu_penyelenggara',
       'bos',
       'sertifikat_iso',
       'sumber_listrik',
       'daya_listrik',
       'akses_internet',
       'akses_internet_alternatif',
       'facebook',
       'youtube',
       'instagram'
    ];
}
