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
            $table->string('fisrtname', 64);
            $table->string('lastname', 64);
            $table->string('password', 64);
            $table->string('email', 128)->unique();
            $table->unsignedBigInteger('alumnocode')->unique();
            $table->unsignedBigInteger('phonenumber')->unique()->nullable();
            $table->boolean('confirmedaccount');
            $table->string('gender', 12);
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
