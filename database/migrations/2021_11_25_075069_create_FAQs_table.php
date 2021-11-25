<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFAQsTable extends Migration
{
    public function up()
    {
        Schema::create('FAQs', function (Blueprint $table) {
           $table->id('faq_id');
           $table->unsignedBigInteger('category_id');
           $table->string('title',20);
           $table->string('content',255);
           $table->string('pic',255);
           $table->string('helpful',10);

           $table->foreign('category_id')
                 ->references('category_id')
                 ->on('FAQ_categories');
        });
    }

    public function down()
    {
        Schema::dropIfExists('FAQs');
    }
}
