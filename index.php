<?php

/**
 * Animelib.ru - anime website
 * @author      Markov Daniil <krraify@yandex.ru>
 * @version     beta
 * @date        16.08.2020
 */


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