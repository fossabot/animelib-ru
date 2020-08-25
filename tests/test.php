<?php

/**
 * Animelib.ru - anime website
 * @author      Markov Daniil <krraify@yandex.ru>
 * @version     beta
 * @date        25.08.2020
 */

require 'app/views/animes/index.php';

use \views\animes\index;
use \PHPUnit\Framework\TestCase;
class test extends TestCase
{
    private $index;

    protected function setUp(): void
    {
        $this->index = new index();
    }

    protected function tearDown(): void
    {
        $this->index = NULL;
    }

    public function testRender()
    {
        $result = $this->index->render();
        self::assertSame('animes_index', $result);
    }
}