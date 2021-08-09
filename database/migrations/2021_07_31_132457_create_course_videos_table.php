<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('video');
            $table->integer('user_id');
            $table->integer('description');
            $table->integer('chapter_id');
            $table->integer('review_id');
            $table->softDeletes();
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
        Schema::dropIfExists('class_videos');
    }
}
