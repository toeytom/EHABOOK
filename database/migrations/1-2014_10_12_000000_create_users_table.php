<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    
    public function up()
    {
       
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('user_name');
            $table->string('user_ava');
            $table->string('user_phone');
            $table->string('user_level');
            $table->string('password');
            $table->string('user_card_name')->nullable();
            $table->string('user_card_id')->nullable();
            $table->string('user_card_cvv')->nullable();
            $table->string('user_card_exp_month')->nullable();
            $table->string('user_card_exp_year')->nullable();
           
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
        Schema::dropIfExists('users');
    }
}
