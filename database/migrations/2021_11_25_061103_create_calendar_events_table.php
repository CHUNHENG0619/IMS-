<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalendarEventsTable extends Migration
{
    public function up()
    {
        Schema::create('calendar_events', function (Blueprint $table) {
            $table->id('calendar_event_id');
            $table->unsignedBigInteger('user_id');
            $table->string('event_title',255);
            $table->char('type_of_event',1);
            $table->dateTime('event_date');
            $table->string('attachment',255)->nullable();
            $table->text('event_description');
            $table->string('location',255);
            $table->json('involved_member')->nullable();
            $table->string('meet_link',30);
            $table->timestamps();

            $table->foreign('user_id')
                  ->references('user_id')
                  ->on('users');
        });
    }

    public function down()
    {
        Schema::dropIfExists('calendar_events');
    }
}
