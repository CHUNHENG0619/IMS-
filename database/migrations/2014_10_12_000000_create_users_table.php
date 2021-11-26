<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->string('user_id',20);
            $table->string('email')->unique();
            $table->string('password',15);
            $table->string('name',255);
            $table->ipAddress('IP_address');
            $table->string('address',255);
            $table->string('phone',20);
            $table->string('role',10);
            $table->char('user_type',1);
            $table->string('recovery_email',30);
            $table->dateTime('registration_time');            
            $table->timestamps();

            $table->primary('user_id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
