<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Pages', function (Blueprint $table) {
            $table->increments('page_id');
            $table->string('page_name');
			$table->string('page_title');
			$table->string('page_detail');
            $table->string('meta_title');
            $table->string('meta_keyword');
			$table->string('meta_description');
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
        Schema::dropIfExists('Pages');
    }
}
