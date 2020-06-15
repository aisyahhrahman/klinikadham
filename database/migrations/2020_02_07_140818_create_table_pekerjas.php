<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePekerjas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pekerjas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_pekerja');
            $table->string('kad_pengenalan');
            $table->string('jantina');
            $table->string('alamat_pekerja');
            $table->string('nombor_fon_pekerja');
            $table->string('status');
            $table->string('nama_pewaris');
            $table->string('hubungan_pewaris');
            $table->string('alamat_pewaris');
            $table->string('nombor_fon_pewaris');
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
        Schema::dropIfExists('pekerjas');
    }
}
