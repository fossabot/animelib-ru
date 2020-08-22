<?php

/**
 * Animelib.ru - anime website
 * @author      Markov Daniil <krraify@yandex.ru>
 * @version     beta
 * @date        16.08.2020
 */


namespace views\application;

class main
{
    public function __construct(string $yield, float $start)
    {
        echo
            "<!DOCTYPE html>
<html lang='ru'>
    <head>
        <title>Animelib</title>
        <meta charset='UTF-8'>
        <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Roboto&display=swap'>
        <link rel='stylesheet' href='/app/assets/css/main.css'>
        <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css' integrity='sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z' crossorigin='anonymous'>
        <script src='/dist/js/bundle.js'></script>
    </head>
    <body>
        <nav class='navbar navbar-expand-lg fixed-top navbar-dark bg-dark shadow-sm'>
            <a href='/' class='navbar-brand mr-auto mr-lg-0'>Animelib</a>
            <button class='navbar-toggler p-0 border-0' type='button' data-toggle='offcanvas'>
                <span class='navbar-toggler-icon'></span>
            </button>
            <div class='navbar-collapse offcanvas-collapse' id='navbarsExampleDefault'>
                <ul class='navbar-nav mr-auto'>
                    <li class='nav-item'>
                        <a href='/' class='nav-link'>Главная</a>
                    </li>
                    <li class='nav-item'>
                        <a href='/animes' class='nav-link'>Аниме</a>
                    </li>
                </ul>
            </div>
        </nav>
        $yield
        <script>console.log('".round(microtime(true) - $start, 4)."');</script>
    </body>
</html>";
    }
}