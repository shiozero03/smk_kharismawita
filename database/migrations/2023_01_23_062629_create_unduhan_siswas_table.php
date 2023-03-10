<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnduhanSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unduhan_siswas', function (Blueprint $table) {
            $table->id();
            $table->integer('id_siswa');
            $table->string('type_dokumen', 250);
            $table->string('dokumen', 250);
            $table->string('judul', 250);
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
        Schema::dropIfExists('unduhan_siswas');
    }
}
