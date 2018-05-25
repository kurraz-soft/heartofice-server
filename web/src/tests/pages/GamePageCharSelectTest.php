<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\tests\pages;


use app\library\CharactersLibrary;
use app\models\Character;
use app\models\GamePage;
use app\tests\UnitTestCase;

class GamePageCharSelectTest extends UnitTestCase
{
    public function test()
    {
        $game_page = new GamePage('charSelect', new Character());

        $game_page->runAndGetNextPage(2);

        $this->assertEquals(CharactersLibrary::CHARACTERS[CharactersLibrary::BOUNTY_HUNTER]['class'], $game_page->character->class);
    }
}