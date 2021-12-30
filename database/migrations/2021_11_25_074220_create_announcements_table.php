<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnouncementsTable extends Migration
{
    public function up()
    {
        Schema::create('announcements', function (Blueprint $table) {
            $table->id('announcement_id');
            $table->unsignedBigInteger('admin_id');
            $table->string('announcement_title',255);
            $table->text('announcement_description');
            $table->dateTime('announcement_date');
            $table->boolean('star');
            $table->string('department',255);
            $table->string('job_type',255);
            $table->string('attachment',255)->nullable();
            $table->timestamps();

            $table->foreign('admin_id')
                  ->references('admin_id')
                  ->on('admins');
        });
    }

    public function down()
    {
        Schema::dropIfExists('announcements');
    }
}
