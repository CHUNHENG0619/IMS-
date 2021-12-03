<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssignTasksTable extends Migration
{
    public function up()
    {
        Schema::create('assign_tasks', function (Blueprint $table) {
            $table->id('task_id');
            $table->unsignedBigInteger('intern_id');
            $table->unsignedBigInteger('staff_id');            
            $table->string('task_title',255);
            $table->text('task_description');
            $table->string('task_status',20);
            $table->dateTime('start_time');
            $table->dateTime('deadline');
            $table->timestamps();

            // $table->foreign('staff_id')
            //       ->references('staff_id')
            //       ->on('staffs')
            //       ->onDelete('cascade');  
                  
            // $table->foreign('intern_id')
            //       ->references('intern_id')
            //       ->on('interns');    
        });
    }

    public function down()
    {
        Schema::dropIfExists('assign_tasks');
    }
}
