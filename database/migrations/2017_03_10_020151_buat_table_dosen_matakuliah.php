<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTableDosenMatakuliah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dosen_matakuliah', function (Blueprint $table) {
            $table->increments('id_dosenmatakuliah');
            $table->integer('dosen_id',false,true);
            $table->foreign('dosen_id')->references('id_dosen')->on('dosen')->onDelete('cascade');
            $table->integer('matakuliah_id',false,true);
            $table->foreign('matakuliah_id')->references('id_matakuliah')->on('matakuliah')->onDelete('cascade');
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
        Schema::drop('dosen_matakuliah');
    }
}
