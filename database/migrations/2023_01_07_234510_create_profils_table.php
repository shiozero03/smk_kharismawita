<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profils', function (Blueprint $table) {
            $table->id();
            $table->string('nama_sekolah', 250);
            $table->string('npsn', 250);
            $table->string('jenjang_pendidikan', 250);
            $table->string('status_sekolah', 250);
            $table->string('alamat_sekolah', 500);
            $table->string('rt_rw', 250);
            $table->string('kode_pos', 250);
            $table->string('kelurahan', 250);
            $table->string('kecamatan', 250);
            $table->string('kabupaten_kota', 250);
            $table->string('provinsi', 250);
            $table->string('negara', 250);
            $table->string('lintang', 250);
            $table->string('bujur', 250);
            $table->string('telepon', 250);
            $table->string('fax', 250);
            $table->string('email', 250);
            $table->string('website', 250);
            $table->string('waktu_penyelenggara', 250);
            $table->string('bos', 250);
            $table->string('sertifikat_iso', 250);
            $table->string('sumber_listrik', 250);
            $table->string('daya_listrik', 250);
            $table->string('akses_internet', 250);
            $table->string('akses_internet_alternatif', 250);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profils');
    }
}
