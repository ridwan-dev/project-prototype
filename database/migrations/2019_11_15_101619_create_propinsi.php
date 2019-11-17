<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropinsi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propinsi', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nama_propinsi')->nullable();
            $table->string('kode_propinsi')->nullable();
            $table->string('long_prop')->nullable();
            $table->string('lat_prop')->nullable();
            $table->string('status_prop')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('propinsi');
    }
}
