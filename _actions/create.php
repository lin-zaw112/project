<?php

include("../vendor/autoload.php");

use Helpers\HTTP;
use Libs\Database\MySQL;
use Libs\Database\UsersTable;


$user = new UsersTable(new MySQL);

$user->insert([
    'name' => $_POST["name"],
    'email' => $_POST["email"],
    "phone" => $_POST['phone'],
    "address" => $_POST['address'],
    "password" => $_POST['password']
]);

HTTP::redirect("index.php", 'register=success');
