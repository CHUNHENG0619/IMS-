<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInternsDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interns_details', function (Blueprint $table) {
            $table->integer('intern_detail_id');
            $table->string('intern_id');
            $table->date('time_to_start');
            $table->date('time_to_end');
            $table->string('resume');
            $table->string('text',255);
            $table->string('state',30);
            $table->string('status',10);
            $table->dateTime('time_to_update');
            $table->dateTime('time_to_post');
            $table->timestamps();

            $table->primary('intern_detail_id');

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
        Schema::dropIfExists('interns_details');
    }
}
