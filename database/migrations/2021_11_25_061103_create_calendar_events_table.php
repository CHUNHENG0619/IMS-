<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalendarEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calendar_events', function (Blueprint $table) {
            $table->increments('calendar_event_id');
            $table->string('user_id');
            $table->string('event_title',255);
            $table->char('type_of_event',1);
            $table->dateTime('event_date');
            $table->string('event_description',255);
            $table->string('attachment',255);
            $table->string('location',255);
            $table->json('involved_member');
            $table->string('meet_link',30);
            $table->timestamps();

            $table->primary('calendar_event_id');

            $table->foreign('user_id')
                  ->references('user_id')
                  ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('calendar_events');
    }
}
