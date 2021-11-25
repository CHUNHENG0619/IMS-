<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staffs', function (Blueprint $table) {
            $table->string('staff_id',10);
            $table->string('user_id');
            $table->integer("department_id");
            $table->timestamps();

            $table->primary('staff_id');

            $table->foreign('user_id')
                  ->references('user_id')
                  ->on('users');

            $table->foreign('department_id')
                  ->references('user_id')
                  ->on('departments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staffs');
    }
}
