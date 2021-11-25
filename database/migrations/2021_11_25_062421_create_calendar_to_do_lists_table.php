<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalendarToDoListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calendar_to_do_lists', function (Blueprint $table) {
            $table->increments('calendar_task_id');
            $table->string('user_id');
            $table->string('description',255);
            $table->string('title',255);
            $table->char('task_color',1);
            $table->string('task_status',10);
            $table->dateTime('start_time');
            $table->string('deadline');
            $table->timestamps();

            $table->primary('calendar_task_id');

            $table->foreign('user_id')
                  ->references('user_id')
                  ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('calendar_to_do_lists');
    }
}
