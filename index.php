<?php

namespace animelib;

define('APP_ROOT', __DIR__ . DIRECTORY_SEPARATOR);
class index
{
    public function __construct()
    {
        require_once "loader.php";
        new loader();
        new \lib\router();
    }
}

new index();