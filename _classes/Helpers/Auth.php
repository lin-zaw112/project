<?php

namespace Helpers;

class Auth
{
    static function check()
    {
        session_start();
        if ($_SESSION['user']) {
            return $_SESSION['user'];
        } else {
            HTTP::redirect("/index.php", 'auth=fail');
        }
    }
}
