<?php

use Illuminate\Console\Scheduling\Schedule as SchedulingSchedule;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schedule;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');


// Schedule::command('test:cron')->everyMinute();


Schedule::call(function(){

    Log::info('this is task from console');

})->everySecond();
