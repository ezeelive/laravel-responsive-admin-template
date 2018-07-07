<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestimonialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Testimonial', function (Blueprint $table) {
            $table->increments('testimonial_id');
            $table->string('name');
			$table->string('description');
			$table->string('compnay_name');
			$table->string('testimonial_image');
            $table->string('testimonial_video');
            $table->string('testimonial_video_file');
			$table->string('is_active');
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
        Schema::dropIfExists('Testimonial');
    }
}
