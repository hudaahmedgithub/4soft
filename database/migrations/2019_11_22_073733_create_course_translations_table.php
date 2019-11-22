<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseTranslationsTable extends Migration
{
    public function up()
    {
        Schema::create('course_translations', function (Blueprint $table) {
         $table->increments('id');
            $table->unsignedInteger('course_id');
            $table->string('locale')->index();

            $table->text('name');
            $table->string('description');

            $table->unique(['course_id', 'locale']);
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course__translations');
    }
}
