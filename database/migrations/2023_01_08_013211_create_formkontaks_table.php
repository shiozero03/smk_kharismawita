<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormkontaksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formkontaks', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 250);
            $table->string('email', 250);
            $table->string('subject', 250);
            $table->string('phone', 250);
            $table->string('message', 2500);
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
        Schema::dropIfExists('formkontaks');
    }
}
