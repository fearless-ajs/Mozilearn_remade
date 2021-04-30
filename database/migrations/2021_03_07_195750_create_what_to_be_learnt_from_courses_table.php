<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWhatToBeLearntFromCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('what_to_be_learnt_from_courses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id')->constrained('courses');
            $table->string('to_be_learnt', 100);
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
        Schema::dropIfExists('what_to_be_learnt_from_courses');
    }
}
