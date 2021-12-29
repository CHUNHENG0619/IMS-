<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubmitTasksTable extends Migration
{
    public function up()
    {
        Schema::create('submit_tasks', function (Blueprint $table) {
            $table->id('submit_task_id');
            $table->unsignedBigInteger('task_id');
            $table->unsignedBigInteger('staff_id');
            $table->unsignedBigInteger('intern_id');
            $table->string('intern_submitted_task',255)->nullable();
            $table->text('submitted_task_description');
            $table->timestamps();

            $table->foreign('task_id')
                ->references('task_id')
                ->on('assign_tasks');

            $table->foreign('staff_id')
                  ->references('staff_id')
                  ->on('assign_tasks');

            $table->foreign('intern_id')
                  ->references('intern_id')
                  ->on('assign_tasks');
        });
    }

    public function down()
    {
        Schema::dropIfExists('submit_tasks');
    }
}
