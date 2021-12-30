<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInternDetailsTable extends Migration
{
    public function up()
    {
        Schema::create('intern_details', function (Blueprint $table) {
            $table->id('intern_detail_id');
            $table->unsignedBigInteger('intern_id');
            $table->unsignedBigInteger('job_id');
            $table->date('time_to_start');
            $table->date('time_to_end');
            $table->string('resume',255)->nullable();
            $table->text('text');
            $table->string('state',30);
            $table->string('status',20);
            $table->dateTime('time_to_update');
            $table->dateTime('time_to_post');
            $table->timestamps();

            $table->foreign('intern_id')
                  ->references('intern_id')
                  ->on('interns');

            $table->foreign('job_id')
                  ->references('job_id')
                  ->on('jobs');
        });
    }

    public function down()
    {
        Schema::dropIfExists('interns_details');
    }
}
