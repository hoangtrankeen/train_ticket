<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('toa', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ma_toa')->unique();
            $table->string('ten_toa');
            $table->string('loai_toa');
            $table->string('ma_tau');
            $table->foreign('ma_tau')->references('ma_tau')->on('tau');
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
        Schema::dropIfExists('toa');
    }
}
