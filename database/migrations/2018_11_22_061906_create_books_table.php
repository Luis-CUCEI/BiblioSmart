<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tittle', 224);
            $table->unsignedInteger('n_system');
            $table->unsignedBigInteger('isbn');
            $table->unsignedInteger('pages');
            $table->string('author', 128);
            $table->string('theme', 128);
            $table->unsignedInteger('copies');
            $table->string('bar_code', 32);
            $table->string('classification', 32);
            $table->unsignedInteger('division_id');
            $table->unsignedInteger('degree_id');
            $table->timestamps();

            $table->foreign('division_id')
                ->references('id')
                ->on('divisions')
                ->onDelete('cascade');

            $table->foreign('degree_id')
                ->references('id')
                ->on('degrees')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
