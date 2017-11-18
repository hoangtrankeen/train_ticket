<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHanhTrinhTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hanh_trinh', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ma_hanh_trinh')->unique();
            
            $table->string('ga_di');
   

            $table->string('ga_den');
    

            $table->dateTime('time_start');

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
        Schema::dropIfExists('hanh_trinh');
    }
}
