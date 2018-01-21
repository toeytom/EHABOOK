<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMylibsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mylibs', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->integer('book_id')->unsigned();
            $table->boolean('myLib_star');
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
           $table->foreign('book_id')->references('book_id')->on('books')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mylibs');
    }
}
