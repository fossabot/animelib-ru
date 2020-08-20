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
    public float $start;
    public function __construct()
    {
        $this->start = microtime(true);
        require_once "loader.php";
        new loader();
        new \lib\router();
    }
}

new index();
echo "<script>console.log('".round(microtime(true) - $this->start, 4)."');</script>";
