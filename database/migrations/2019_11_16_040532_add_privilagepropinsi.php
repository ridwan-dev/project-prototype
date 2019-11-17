<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPrivilagepropinsi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('privilagepropinsi', function (Blueprint $table) {
            $table->integer('privilege')->nullable();
            $table->string('prov_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('privilagepropinsi', function (Blueprint $table) {
            //
        });
    }
}
