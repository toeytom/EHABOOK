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
            $table->increments('user_id');
            $table->string('user_email')->unique();
            $table->string('user_name');
            $table->string('user_ava');
            $table->string('user_phone');
            $table->string('user_level');
            $table->string('user_password');
            $table->string('user_card_name');
            $table->string('user_card_id');
            $table->string('user_card_cvv');
            $table->string('user_card_exp_month');
            $table->string('user_card_exp_year');
            $table->integer('social_id')->unsigned();
           $table->foreign('social_id')->references('id')->on('social_facebook_accounts');
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
