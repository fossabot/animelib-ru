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
<html lang=\"ru\">
    <head>
        <title>Animelib</title>
        <meta charset='UTF-8'>
        <link href=\"https://fonts.googleapis.com/css2?family=Roboto&display=swap\" rel=\"stylesheet\">
        <link rel='stylesheet' type='text/css' href='/app/assets/css/main.css'>
    </head>
    <body>
        $yield
    </body>
</html>";
    }
}