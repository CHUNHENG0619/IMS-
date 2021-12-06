<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('email',60)->unique();
            $table->string('password',60);
            $table->string('name',255);
            $table->ipAddress('IP_address');
            $table->string('address',255);
            $table->string('phone',20);
            $table->string('role',10);
            $table->integer('user_type');
            $table->string('recovery_email',60);
            $table->dateTime('registration_time');            
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
