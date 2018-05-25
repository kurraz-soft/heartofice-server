<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\tests\pages;


use app\library\CharactersLibrary;
use app\library\ItemsLibrary;
use app\models\Character;
use app\models\GamePage;
use app\tests\UnitTestCase;

class GamePage13Test extends UnitTestCase
{
    public function test()
    {
        $character = new Character(CharactersLibrary::getCharacterTemplate(CharactersLibrary::EXPLORER));
        $character->health = 10;

        $gamePage = new GamePage('13',$character);

        $gamePage->compileWithAnswers();

        $gamePage = $gamePage->runAndGetNextPage(0);

        $this->assertEquals(6, $gamePage->character->health);
    }

    public function testWithBURREK()
    {
        $character = new Character(CharactersLibrary::getCharacterTemplate(CharactersLibrary::EXPLORER));
        $character->health = 10;
        $character->addToInventory(ItemsLibrary::BURREK);

        $gamePage = new GamePage('13',$character);

        $gamePage->compileWithAnswers();

        $gamePage = $gamePage->runAndGetNextPage(0);

        $this->assertEquals(7, $gamePage->character->health);
    }

    public function testWithWarmCloth()
    {
        $character = new Character(CharactersLibrary::getCharacterTemplate(CharactersLibrary::EXPLORER));
        $character->health = 10;
        $character->addToInventory(ItemsLibrary::WARM_CLOTH);

        $gamePage = new GamePage('13',$character);

        $gamePage->compileWithAnswers();

        $gamePage = $gamePage->runAndGetNextPage(0);

        $this->assertEquals(7, $gamePage->character->health);
    }
}