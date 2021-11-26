<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInternsTable extends Migration
{
    public function up()
    {
        Schema::create('interns', function (Blueprint $table) {
            $table->id('intern_id');
            $table->string('user_id');
            $table->string('intern_name',255);
            $table->string('intern_department',255);
            $table->string('intern_email',20)->unique();
            $table->string('intern_phone',20);
            $table->timestamps();

            $table->foreign('user_id')
                  ->refernces('user_id')
                  ->on('users')
                  ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('interns');
    }
}
