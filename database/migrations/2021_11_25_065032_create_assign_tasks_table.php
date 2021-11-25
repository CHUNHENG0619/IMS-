<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssignTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assign_tasks', function (Blueprint $table) {
            $table->string('task_id',10);
            $table->string('staff_id');
            $table->string('intern_id');
            $table->string('task_title',100);
            $table->string('task_description',100);
            $table->string('task_status',10);
            $table->dateTime('start_time');
            $table->dateTime('deadline');
            $table->timestamps();

            $table->primary('task_id');

            $table->foreign('staff_id')
                  ->references('staff_id')
                  ->on('staffs');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assign_tasks');
    }
}
