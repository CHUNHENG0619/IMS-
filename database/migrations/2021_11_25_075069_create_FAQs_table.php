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
           $table->string('title',255);
           $table->text('content');
           $table->string('pic',255);
           $table->boolean('helpful');
           $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('FAQs');
    }
}
