<?php

include('../vendor/autoload.php');

use Helpers\Auth;
use Helpers\HTTP;

if (Auth::check()) {
    HTTP::redirect('profile.php');
} else {
    HTTP::redirect("index.php", 'auth=fail');
}
