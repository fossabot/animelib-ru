<?php

/**
 * Animelib.ru - anime website
 * @author      Markov Daniil <krraify@yandex.ru>
 * @version     beta
 * @date        16.08.2020
 */


namespace animelib;

/**
 * Class loader
 * @package animelib
 */
class loader
{
    /**
     * loader constructor.
     */
    public function __construct()
    {
        $this->including('lib/*.php');
        $this->including('app/views/*.php');
        $this->including('app/views/*/*.php');
        include_once 'vendor/autoload.php';
    }

    /**
     * @param string $pattern
     */
    private function including(string $pattern): void
    {
        foreach (glob($pattern) as $file)
        {
            include_once $file;
        }
    }
}