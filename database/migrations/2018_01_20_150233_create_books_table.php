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
            $table->string('book_name');
            $table->string('book_cover');
            $table->string('book_category');
            $table->decimal('book_price',5,2);
            $table->integer('book_page_per_book');
            $table->float('book_size',5,2);
            $table->float('book_score',5,2);
            $table->string('book_demo');
            $table->string('book_description');
            $table->string('book_address');
            $table->timestamps();
            $table->foreign('user_user_id')->references('user_id')->on('users');
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
