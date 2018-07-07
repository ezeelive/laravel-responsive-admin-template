<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventdatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventdates', function (Blueprint $table) {
            $table->increments('event_date_id');
            $table->increments('event_id');
            $table->string('from_date');
            $table->string('from_time');
            $table->string('to_date');
            $table->string('to_time');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eventdates');
    }
}
