<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplyLeavesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apply_leaves', function (Blueprint $table) {
            $table->id('leave_id');
            $table->unsignedBigInteger('intern_id');
            $table->unsignedBigInteger('admin_id');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('remark',255);
            $table->string('status',20);
            $table->timestamps();

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
        Schema::dropIfExists('apply_leaves');
    }
}
