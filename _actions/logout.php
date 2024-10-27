<?php

use Helpers\HTTP;

include("../vendor/autoload.php");

session_start();
unset($_SESSION['user']);

HTTP::redirect('index.php');
