<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->string('job_id',10);
            $table->string('admin_id');
            $table->string('job_title',255);
            $table->string('job_department',255);
            $table->string('job_desc',255);
            $table->string('job_requirement',255);
            $table->string('job_type',255);
            $table->string('job_location',255);
            $table->double('salary');
            $table->date('start_date');
            $table->date('end_date');
            $table->timestamps();

            $table->primary('job_id');

            $table->foreign('admin_id')
                  ->references('admin_id')
                  ->on('admins');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}
