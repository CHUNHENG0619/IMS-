<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePayslipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payslips', function (Blueprint $table) {
            $table->string('payslip_id',10);
            $table->string('admin_id');
            $table->string('intern_id');
            $table->double('amount');

            $table->primary('payslip_id');

            $table->foreign('admin_id')
                  ->references('admin_id')
                  ->on('admins');

            $table->foreign('intern_id')
                  ->references('intern_id')
                  ->on('interns');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payslips');
    }
}
