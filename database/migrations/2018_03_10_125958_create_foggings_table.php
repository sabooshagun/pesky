<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoggingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foggings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('area_id');
            $table->double('lat');
            $table->double('long');
            $table->double('radius');
            $table->integer('user_id')->nullable();
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
        Schema::dropIfExists('foggings');
    }
}
