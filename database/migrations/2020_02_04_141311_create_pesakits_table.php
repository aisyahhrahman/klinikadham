<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesakitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesakits', function (Blueprint $table) {
            $table->bigIncrements('table_id');
            $table->string('nama_pesakit');
            $table->string('nombor_id');
            $table->string('kad_pengenalan');
            $table->string('jantina');
            $table->string('alamat');
            $table->string('nombor_fon');
            $table->string('email')->nullable();
            $table->integer('status');
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
        Schema::dropIfExists('pesakits');
    }
}
