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
    public function __construct(float $start)
    {
        if (preg_match('/^\/$/', $_SERVER['REQUEST_URI'], $matchers) == true)
        {
            $this->render((new \views\dashboard\dashboard())->render(), $start);
        }
        elseif (preg_match('/^\/animes(\/|$)$/i', $_SERVER['REQUEST_URI'], $matchers) == true)
        {
            $this->render((new \views\animes\index())->render(), $start);
        }
        else
        {
            $this->render('404 err', $start);
        }
    }

    /**
     * @param string $view
     * @return \views\application\main
     */
    private function render(string $view, float $start): \views\application\main
    {
        return new \views\application\main($view, $start);
    }
}