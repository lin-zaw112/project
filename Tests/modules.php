<?php

include("../vendor/autoload.php");

use Libs\Database\MySQL;
use Libs\Database\UsersTable;
use Helpers\Auth;
use Helpers\HTTP;
use Faker\Factory as Faker;

$faker = Faker::create();

echo "Auth Check method exist  " . method_exists(Auth::class, "check");
echo "<br>";
echo "HTTP Redirect method exist  " . method_exists(HTTP::class, "redirect");
echo "<br>";
echo "User Insert method exist  " . method_exists(UsersTable::class, "insert");
echo "<br>";
echo "DataBase connect method exist  " . method_exists(MySQL::class, 'connect');
echo "<br>";

echo $faker->name();
echo "<br>";
echo $faker->email();
