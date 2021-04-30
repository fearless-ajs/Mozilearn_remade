<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('type')->default('Free'); //premium or free
            $table->string('category');
            $table->string('price')->nullable()->default(0.00);
            $table->string('title', 1000);
            $table->string('slug', 1500);
            $table->string('hint', 1000);
            $table->integer('enrolled')->default(0); //Number of enrolled students
            $table->string('language'); //Language used in the course
            $table->boolean('subtitle_status')->default(false); //true or false
            $table->string('money_back_guarantee')->default('30-Day Money-Back Guaranteed');
            $table->integer('seen')->default(0); //Number of people who viewed the course information
            $table->integer('like')->default(0); //Number of people who liked the course
            $table->integer('dislike')->default(0); //Number of people who disliked the course
            $table->string('status')->default('Pending'); //Pending, Approved, Suspended
            $table->text('requirement')->nullable(); //To be used with TinyWCE editor
            $table->text('description'); //To be used with TinyWCE editor
            $table->text('cover_image');
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
        Schema::dropIfExists('courses');
    }
}
