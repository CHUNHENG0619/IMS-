<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_applications', function (Blueprint $table) {
            $table->string('apply_id',10);
            $table->string('job_id');
            $table->string('intern_Id');
            $table->string('admin_id');
            $table->date('apply_date');
            $table->string('status',10);
            $table->timestamps();

            $table->primary('apply_id');

            $table->foreign('job_id')
                  ->references('job_id')
                  ->on('jobs');

            $table->foreign('intern_id')
                  ->references('intern_id')
                  ->on('interns');

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
        Schema::dropIfExists('job_applications');
    }
}
