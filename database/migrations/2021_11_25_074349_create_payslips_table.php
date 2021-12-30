<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePayslipsTable extends Migration
{
    public function up()
    {
        Schema::create('payslips', function (Blueprint $table) {
            $table->id('payslip_id');
            $table->unsignedBigInteger('admin_id');
            $table->unsignedBigInteger('intern_id');
            $table->double('amount');
            $table->string('payslip_title',255);
            $table->date('payslip_date');
            $table->timestamps();

            $table->foreign('admin_id')
                  ->references('admin_id')
                  ->on('admins');

            $table->foreign('intern_id')
                  ->references('intern_id')
                  ->on('interns');
        });
    }

    public function down()
    {
        Schema::dropIfExists('payslips');
    }
}
