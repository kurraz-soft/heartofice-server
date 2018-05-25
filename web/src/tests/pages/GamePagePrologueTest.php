<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\tests\pages;


use app\models\Character;
use app\models\GamePage;
use app\tests\UnitTestCase;

class GamePagePrologueTest extends UnitTestCase
{
    public function test()
    {
        $game_page = new GamePage('start', new Character());
        $game_page->run();

        $this->assertContains('Три прошедших столетия', $game_page->body);
        $this->assertEquals('Выбрать персонажа...', $game_page->answers[0]);
        $this->assertEquals('charSelect', $game_page->answerWays[0]);
    }
}