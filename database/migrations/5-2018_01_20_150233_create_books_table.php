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
            $table->increments('book_id');
            $table->string('book_name', 500);
            $table->string('book_cover', 500);
            $table->string('book_author',500);
            $table->string('book_category', 500);
            $table->decimal('book_price', 7, 2);
            $table->integer('book_page_per_book');
            $table->string('book_size');
            $table->float('book_score' , 3, 2);
            $table->string('book_demo', 500);
            $table->string('book_description', 500);
            $table->string('book_address', 500);
            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
