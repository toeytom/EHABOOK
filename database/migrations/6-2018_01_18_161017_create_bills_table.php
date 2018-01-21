<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * 
     */

    public function up()
    {
        Schema::table('users', function ($table) {
           
        });
        
        Schema::create('bills', function (Blueprint $table) {
            $table->dateTime('date_of_sale');
            $table->decimal('bill_price', 7, 2);
            $table->integer('book_id')->unsigned();
            $table->integer('user_id')->unsigned();
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
        Schema::dropIfExists('bills');
    }
}
