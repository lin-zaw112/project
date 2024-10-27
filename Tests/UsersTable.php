<?php

include('../vendor/autoload.php');

use Libs\Database\MySQL;
use Libs\Database\UsersTable;

$user = new UsersTable(new MySQL);

$id = $user->insert([
    'name' => 'John',
    "email" => 'john@example.com',
    "phone" => 95555555,
    "address" => "Some address",
    "password" => "password"
]);
echo $id;
