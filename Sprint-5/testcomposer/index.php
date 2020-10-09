<?php

require_once __DIR__ . '/vendor/autoload.php';

// use src\Controller;
// use src\Authcpntroller;
use Carbon\Carbon;

// $conn = new Controller;
// $auth = new Authcontroller;
// printf("Right now in Indonesia is %s", Carbon::now('Asia/Jakarta'));   //implicit __toString()
$tomorrow = Carbon::now()->addDay();
 printf("Right Tomorrow in indonesia is $tomorrow");

$lastWeek = Carbon::now()->subWeek();
$nextSummerOlympics = Carbon::createFromDate(2016)->addYears(4);