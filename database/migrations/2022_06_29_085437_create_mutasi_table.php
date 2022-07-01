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
        Schema::create('mutasi', function (Blueprint $table) {
            $table->id();
            $table->string('nobukti');
            $table->enum('mk',['masuk','keluar']);
            $table->foreignId('idbarang')->references('id')->on('tbbarang')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('qty');
            $table->integer('hrgjual');
            $table->integer('hpp');
            $table->text('ket');
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
        Schema::dropIfExists('mutasi');
    }
};
