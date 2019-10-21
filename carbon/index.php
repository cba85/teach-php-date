<?php

use Carbon\Carbon;

require 'vendor/autoload.php';

echo Carbon::now();
echo Carbon::tomorrow();
echo Carbon::yesterday();

echo Carbon::create(1990, 12, 2, 0, 0, 0);
echo Carbon::createFromDate(1990, 12, 2);
echo Carbon::createFromTime(12, 12, 00);

$c = new Carbon('10th October 2018');
//$c = new Carbon('+ 2 days');
echo $c->format('d/m/Y');
echo $c->diffForHumans();
echo $c->year;
echo $c->month;
echo $c->dayOfWeek;
echo $c->quarter;
$c = new Carbon ('1989-01-12');
echo $c->age;
$c->addDays(2);

// Comparison
$date = new Carbon();
$date2 = new Carbon('+5 days');
$date3 = new Carbon('+12 days');
$diff = $date->eq($date2);
$diff = $date->gt($date2);
$diff = $date->lt($date2);
echo $diff;

$diff = $date2->between($date, $date3);
echo $diff;

echo $date->isWeekend();
echo $date->isWeekday();
echo $date->isYesterday();
echo $date->isFuture();

$john = new Carbon('16th November 1989');
$mike = new Carbon('25th October 1961');

echo 'John is ' . $john->diffInYears($mike) . ' younger than Mike';
echo $john->diffInWeekenddays($mike);
echo $john->diffForHumans($mike);