<?php
/*
    http://php.net/manual/en/class.datetime.php
*/

$date = new Datetime;

// 1. Date object
var_dump($date);

// 2. Date methods
echo $date->format('d/m/Y');
echo $date->getTimestamp();

// 3. Specific date
// 3.1. String
$dateString = "2012-12-21";
$date = Datetime::createFromFormat('Y-m-d', $dateString);
var_dump($date);
echo $date->format('d/m/Y');
// 3.2. Timestamp
$date = new DateTime;
$date->setTimestamp('627212738');
echo $date->format('d/m/Y');
// 3.3. Date
$date = new DateTime;
$date->setDate(2017, 07, 01);
echo $date->format('d/m/Y');

// 4. Modify dates
$date = new DateTime;
$interval = new DateInterval('P15DT2H');
$date->add($interval);
echo $date->format('d/m/Y');
$date->sub($interval);
echo $date->format('d/m/Y');
$hours = 2;
$days = 15;
$interval = new DateInterval('P' . $days . 'DT' . $hours . 'H');
$date->add($interval);
echo $date->format('d/m/Y');
$date = new DateTime('+ 10 days 2 hours');
echo $date->format('d/m/Y');
$date = new DateTime;
$date->setDate(2012, 12, 12);
$date->modify('+2 days');
var_dump($date);

// 5. Differences
$currentDate = new DateTime;
$birthday = new DateTime;
$birthday->setDate(1994, 05, 26)->setTime(10, 00, 00);
$timeUntilBirthday = $currentDate->diff($birthday);
var_dump($age);
echo $timeUntilBirthday->y;

// 6. Comparison
$date1 = new DateTime('2015-01-01');
$date2 = new DateTime('2015-03-04');
$yearDate1 = (int) $date1->format('Y');
if ($yearDate1 < 2018) {
    echo 'Yes';
}

// 7. Timezones
$date = new DateTime;
$timezones = DateTimeZone::listIdentifiers();
print_r($timezones);
$timezone = new DateTimeZone('Europe/Paris');
$date->setTimezone($timezone);
var_dump($date);
date_default_timezone_set('Europe/Paris');

// 8. Periods
$start = new DateTime;
$start->setTime(10, 0, 0);
print_r($start);
$end = clone $start;
$end->setTime(19, 0, 0);
$interval = new DateInterval('PT1H');
$ranges = new DatePeriod($start, $interval, $end);
print_r($ranges);
foreach($ranges as $range) {
    print_r($range);
}

// 9. Useful
echo time();
echo microtime(true);
echo date('d/m/Y');
$check = checkdate(7, 37, 2016);
print_r($check);
print_r(timezone_identifiers_list());