<?php

namespace Helpers;

class HTTP
{
    // ROOT URL Location
    static $base = "http://localhost/project/";

    static function redirect($page = '', $q = '')
    {
        $url = static::$base . $page;
        // Add query into the url String
        if ($q) $url .= "?$q";

        header("location: $url");

        exit();
    }
}
