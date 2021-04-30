<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->text('biography')->nullable();
            $table->string('qualification', 500);
            $table->string('phone');
            $table->string('twitter')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('github')->nullable();
            $table->string('status')->default('Pending'); //Pending, Activated, Suspended, Terminated
            $table->string('gender');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('language');
            $table->softDeletes();
            $table->string('age'); $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
