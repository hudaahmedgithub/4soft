<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('name');
			$table->string('description');
			$table->string('hours');
			$table->string('duration');
			$table->string('image');
			$table->string('price');
			$table->integer('language_id')->unsigned();
			$table->integer('video_id')->unsigned();
			$table->integer('user_id')->unsigned();
			$table->integer('level_id')->unsigned();
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
        Schema::dropIfExists('courses');
    }
}
