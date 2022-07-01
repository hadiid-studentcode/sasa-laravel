<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbbarang', function (Blueprint $table) {
            $table->id();
            $table->integer('kode');
            $table->string('nama',70);
            $table->foreignId('idsatuan')->references('id')->on('tbsatuan')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('sawal');
            $table->integer('hb');
            $table->integer('hj');
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
        Schema::dropIfExists('tbbarang');
    }
};
