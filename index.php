<?php

require 'Carbon/autoload.php';

use Carbon\Carbon;

$time = "2021-08-04 16:19:49";
Carbon::setLocale('ar');
$dt = Carbon::createFromFormat('Y-m-d H:i:s', $time);

echo $dt->diffForHumans() . "\n";
