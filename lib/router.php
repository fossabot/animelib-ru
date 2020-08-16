<?php

/**
 * Animelib.ru - anime website
 * @author      Markov Daniil <krraify@yandex.ru>
 * @version     beta
 * @date        16.08.2020
 */


namespace lib;


class router
{
    public function __construct()
    {
        if (preg_match('/^\/$/', $_SERVER['REQUEST_URI'], $matchers) == true)
        {
            $this->render('index_page');
        }
    }

    /**
     * @param string $view
     * @return \views\application\main
     */
    private function render(string $view = ''): \views\application\main
    {
        return new \views\application\main($view);
    }
}