<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKabupaten extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kabupaten', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nama_kabupaten')->nullable();
            $table->string('kode_kabupaten')->nullable();
            $table->string('propinsi_id')->nullable();
            $table->string('long_kab')->nullable();
            $table->string('lat_kab')->nullable();
            $table->string('status_kab')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kabupaten');
    }
}
