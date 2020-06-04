<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddGiftForMhs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hadiah', function(Blueprint $table){
            $table->id();
            $table->string('nama_hadiah');
        });

        Schema::create('hadiah_mahasiswa', function(Blueprint $table){
            $table->id();
            $table->integer('mahasiswa_id');
            $table->integer('hadiah_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
