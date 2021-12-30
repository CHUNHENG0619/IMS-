<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalendarToDoListsTable extends Migration
{
    public function up()
    {
        Schema::create('calendar_to_do_lists', function (Blueprint $table) {
            $table->id('calendar_to_do_lists_id');
            $table->unsignedBigInteger('user_id');
            $table->string('title',255);
            $table->text('description');            
            $table->string('task_status',20);
            $table->char('task_color',1);
            $table->dateTime('start_time');
            $table->dateTime('deadline');
            $table->timestamps();

            $table->foreign('user_id')
                  ->references('user_id')
                  ->on('users');
        });
    }

    public function down()
    {
        Schema::dropIfExists('calendar_to_do_lists');
    }
}