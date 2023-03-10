<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSKLSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('s_k_l_s', function (Blueprint $table) {
            $table->id();
            $table->string('id_siswa', 250);
            $table->integer('pai');
            $table->integer('pkn');
            $table->integer('indo');
            $table->integer('mtk');
            $table->integer('sejarah');
            $table->integer('inggris');
            $table->integer('sbk');
            $table->integer('sunda');
            $table->integer('skd');
            $table->integer('ekobisnis');
            $table->integer('adm');
            $table->integer('ipa');
            $table->integer('dasarprogram');
            $table->integer('kompetensikeahlian');
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
        Schema::dropIfExists('s_k_l_s');
    }
}
