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
    public function __construct(string $yield)
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
        <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js' integrity='sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV' crossorigin='anonymous'></script>
        <script src='https://code.jquery.com/jquery-3.5.1.slim.min.js' integrity='sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj' crossorigin='anonymous'></script>
        <script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js' integrity='sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN' crossorigin='anonymous'></script>
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
                </ul>
            </div>
        </nav>
        $yield
    </body>
</html>";
    }
}