<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->bigIncrements('stock_id');
            $table->string('kuantiti')->nullable();
            $table->string('price')->nullable();
            $table->string('batch_no')->nullable();
            $table->string('invoice')->nullable();
            $table->string('tarikh')->nullable();
            $table->string('mal_no')->nullable();
            $table->string('expiry_date')->nullable();
            $table->unsignedBigInteger('ubat_id');
            $table->foreign('ubat_id')->references('ubat_id')->on('ubats')->onDelete('cascade');
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
        Schema::dropIfExists('stocks');
    }
}
