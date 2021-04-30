<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseSectionContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_section_contents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id')->constrained('courses');
            $table->foreignId('course_section_id')->constrained('course_sections');
            $table->string('title');
            $table->string('slug', 1500);
            $table->string('position'); //Position in section, could 1 to any number
            $table->text('description')->nullable();
            $table->string('location');//Path to the video file
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
        Schema::dropIfExists('course_section_contents');
    }
}
