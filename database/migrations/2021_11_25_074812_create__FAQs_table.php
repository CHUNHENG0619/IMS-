<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFAQsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('FAQs', function (Blueprint $table) {
           $table->string('faq_id',10);
           $table->string('categories_id',10);
           $table->string('title',20);
           $table->string('content',255);
           $table->string('pic',255);
           $table->string('helpful',10);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('FAQs');
    }
}
