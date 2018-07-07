<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('event_id');
            $table->string('event_title');
            $table->increments('event_type');
            $table->increments('event_city_id');
            $table->string('address');
            $table->string('city');
            $table->increments('country_id');
            $table->string('contact_no');
            $table->string('representor');
            $table->string('geo_lat');
            $table->string('geo_long');
            $table->string('event_image');
            $table->string('event_video');
            $table->string('email_id');
            $table->string('event_youtube_url');
            $table->string('meta_title');
            $table->string('meta_keyword');
            $table->string('meta_description');
            $table->string('event_detail');
            $table->increments('is_active');
            $table->increments('created_by');
            $table->increments('updated_by');
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
        Schema::dropIfExists('events');
    }
}
