<?php

include("../vendor/autoload.php");

use Helpers\HTTP;
use Libs\Database\MySQL;
use Libs\Database\UsersTable;



$id = $_GET["id"];

$user = new UsersTable(new MySQL);

$user->delete($id);

HTTP::redirect("admin.php");
