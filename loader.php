<?php

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