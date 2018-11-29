<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentBookTable extends Migration
{
    public function up()
    {
        Schema::create('student_book', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('book_id');
            $table->unsignedInteger('student_id');
            $table->string('school_cycle', 6);
            $table->dateTime('delivery_at');
            $table->boolean('delivery');
            $table->timestamps();

            $table->foreign('book_id')
                ->references('id')
                ->on('books')
                ->onDetele('cascade');

            $table->foreign('student_id')
                ->references('id')
                ->on('students')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('student_book');
    }
}
