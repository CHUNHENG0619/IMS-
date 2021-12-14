<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Holiday;

class CreateHolidaysTable extends Migration
{
    public function up()
    {
        Schema::create('holidays', function (Blueprint $table) {
            $table->id('holiday_id');
            $table->string('holiday_name', 255);
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('total_holiday_days');
            $table->json('states');
            $table->timestamps();
        });

        $holidays = file_get_contents(base_path('storage/json/holidays2021.json'));
        $data = json_decode($holidays, true);

        foreach ($data as $myData) {
            $holiday = new Holiday();
            $holiday->holiday_id = $myData['holiday_id'];
            $holiday->holiday_name = $myData['holiday_name'];
            $holiday->start_date = $myData['start_date'];
            $holiday->end_date = $myData['end_date'];
            $holiday->total_holiday_days = $myData['total_holiday_days'];
            $holiday->states = $myData['states'];
            $holiday->save();
        }
    }
    public function down()
    {
        Schema::dropIfExists('holidays');
    }
}
