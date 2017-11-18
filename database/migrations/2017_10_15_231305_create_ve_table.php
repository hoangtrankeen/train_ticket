<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ve', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ma_ve')->unique();
            $table->string('ma_dat_cho');
            $table->string('ma_hanh_trinh');
            $table->foreign('ma_hanh_trinh')->references('ma_hanh_trinh')->on('hanh_trinh');

            $table->string('ma_khach');
            $table->foreign('ma_khach')->references('ma_khach')->on('khach');
            
            $table->integer('gia_ve');
            $table->integer('tinh_trang');
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
        Schema::dropIfExists('ve');
    }
}
