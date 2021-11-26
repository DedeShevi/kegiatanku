<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');   
                    $table->unsignedInteger('user_id')->nullable();
            $table->string('nisn')->unique()->nullable();
            $table->string('name')->nullable();
            $table->string('gender')->nullable();
            $table->string('religion')->nullable();
            $table->string('major')->nullable();
            $table->string('class')->nullable();
                    $table->string('phone')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('students');
    }
}
