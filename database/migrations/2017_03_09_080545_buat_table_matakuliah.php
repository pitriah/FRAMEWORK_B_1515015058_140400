<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTableMatakuliah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matakuliah', function (Blueprint $table) {
            $table->increments('id_matakuliah');
            $table->string('title_matakuliah');
            $table->string('keterangan_matakuliah');
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
        Schema::drop('matakuliah');
    }
}
