<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLatihanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('latihan', function (Blueprint $table) {
            $table->id();
            $table->integer('nis');
            $table->string('nama');
            $table->string('jk');
            $table->string('tempat');
            $table->date('tl');
            $table->string('alamat');
            $table->string('asal_sekolah');
            $table->string('kelas');
            $table->string('jurusan');
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
        Schema::dropIfExists('latihan');
    }
}
