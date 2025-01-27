<?php

require 'Carbon/autoload.php';
require 'Faker/src/autoload.php';

use Carbon\Carbon;
use Faker\Factory;

$time = "2021-08-04 16:19:49";
Carbon::setLocale('ar');
$dt = Carbon::createFromFormat('Y-m-d H:i:s', $time);

echo $dt->diffForHumans() . "<br>";

$faker = Factory::create();

echo "Name: " . $faker->name . "<br>";
echo "Address: " . $faker->address . "<br>";
echo "Phone: " . $faker->phoneNumber . "<br>";
