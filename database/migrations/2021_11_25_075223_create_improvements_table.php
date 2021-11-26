<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImprovementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('improvements', function (Blueprint $table) {
            $table->id('improvement_id');
            $table->unsignedBigInteger('faq_id');
            $table->text('description');
            $table->timestamps();

            $table->foreign('faq_id')
                  ->references('faq_id')
                  ->on('FAQs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('improvements');
    }
}
