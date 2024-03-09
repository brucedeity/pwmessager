<?php

require_once __DIR__.'/vendor/autoload.php';

use GO\Scheduler;
use App\Cron;

$scheduler = new Scheduler;

// $scheduler->call(function () { Cron::execute('every01min'); })->everyMinute();
// $scheduler->call(function () { Cron::execute('every02min'); })->everyMinute(2);
// $scheduler->call(function () { Cron::execute('every5min'); })->everyMinute(5);
$scheduler->call(function () { Cron::execute('every10min'); })->everyMinute(10);
// $scheduler->call(function () { Cron::execute('every15min'); })->everyMinute(15);
// $scheduler->call(function () { Cron::execute('every20min'); })->everyMinute(20);
// $scheduler->call(function () { Cron::execute('every30min'); })->everyMinute(30);
// $scheduler->call(function () { Cron::execute('every1hour'); })->hourly();
// $scheduler->call(function () { Cron::execute('every1day'); })->daily();

$scheduler->run();