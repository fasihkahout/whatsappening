<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form', function (Blueprint $table) {
            $table->id();
            $table->string('file_path');
            $table->string('fname');
            $table->string('lname');
            $table->string('number')->unique();
            $table->string('dob');
            $table->string('interest');
            $table->string('relationship');
            $table->string('age');
            $table->string('location');
            $table->string('distance');
            $table->string('my_age');
            $table->string('pronouns');
            $table->string('status');
            $table->rememberToken();
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
        Schema::dropIfExists('form');
    }
}
