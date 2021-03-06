<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImprovementsTable extends Migration
{
    public function up()
    {
        Schema::create('improvements', function (Blueprint $table) {
            $table->id('improvement_id');
            $table->unsignedBigInteger('faq_id');
            $table->text('description');
            $table->timestamps();

            $table->foreign('faq_id')
                  ->references('faq_id')
                  ->on('FAQs')
                  ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('improvements');
    }
}
