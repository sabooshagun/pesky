<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sources', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('code'); //1-patient, 2 - Challan,3-user specific
            $table->integer('hospital_id')->nullable();
            $table->string('patient_name')->nullable();
            $table->string('challan_no')->nullable();
            $table->double('lat')->nullable();
            $table->double('long')->nullable();
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
        Schema::dropIfExists('sources');
    }
}
