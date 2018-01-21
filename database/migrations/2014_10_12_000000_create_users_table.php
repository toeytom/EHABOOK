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
            $table->string('name');
            $table->string('surname');
            $table->string('profile_pic');
            $table->string('tel');
            $table->string('idcard');
            $table->string('password');
            $table->string('card_name');
            $table->string('card_id');
            $table->string('cvv');
            $table->string('expiry_month');
            $table->string('expiry_year');
            $table->foreignkey('social_id')->references('id')->on('social_facebook_accounts');
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
