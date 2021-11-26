<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffsTable extends Migration
{
    public function up()
    {
        Schema::create('staffs', function (Blueprint $table) {
            $table->id('staff_id');
            $table->string('user_id');
            $table->unsignedBigInteger("department_id");
            $table->timestamps();

            $table->foreign('user_id')
                  ->references('user_id')
                  ->on('users')
                  ->onDelete('cascade');

            $table->foreign('department_id')
                  ->references('department_id')
                  ->on('departments');
        });
    }

    public function down()
    {
        Schema::dropIfExists('staffs');
    }
}
