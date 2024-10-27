<?php

include('../vendor/autoload.php');

use Libs\Database\MySQL;
use Libs\Database\UsersTable;

$table = new UsersTable(new MySQL);

$user = $table->find('john@example.com', 'password');
print_r($user);
