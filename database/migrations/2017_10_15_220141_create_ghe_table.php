<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGheTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ghe', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ma_ghe')->unique();
            $table->string('ma_toa');
            $table->foreign('ma_toa')->references('ma_toa')->on('toa');

            $table->string('ma_tau');
            $table->foreign('ma_tau')->references('ma_tau')->on('tau');
            $table->string('loai_ghe');
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
        Schema::dropIfExists('ghe');
    }
}
