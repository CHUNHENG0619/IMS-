<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('educations', function (Blueprint $table) {
            $table->id('edu_id');
            $table->unsignedBigInteger('intern_detail_id');
            $table->string('current_edu_level',30);
            $table->string('current_edu_institution',30);
            $table->string('current_institution_location',30);
            $table->string('study_field',30);
            $table->string('grad_period',30);

            $table->foreign('intern_detail_id')
                  ->references('intern_detail_id')
                  ->on('intern_details');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('educations');
    }
}
