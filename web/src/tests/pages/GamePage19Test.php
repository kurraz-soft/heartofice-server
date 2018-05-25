<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\tests\pages;


use app\library\CharactersLibrary;
use app\library\ItemsLibrary;
use app\library\KeywordsLibrary;
use app\models\Character;
use app\models\GamePage;
use app\models\GamePageLoader;
use app\tests\UnitTestCase;

class GamePage19Test extends UnitTestCase
{
    public function test()
    {
        $character = new Character(CharactersLibrary::getCharacterTemplate(CharactersLibrary::EXPLORER));
        $character->health = 10;

        $gamePage = GamePageLoader::loadNextPage(19,$character,0);

        $this->assertEquals('175', $gamePage->answerWays[0]);

        $this->assertEquals(4, $gamePage->character->health);
    }

    public function testWithBulletproof()
    {
        $character = new Character(CharactersLibrary::getCharacterTemplate(CharactersLibrary::EXPLORER));
        $character->health = 10;
        $character->addToInventory(ItemsLibrary::BULLETPROOF_VEST);

        $gamePage = new GamePage('19',$character);

        $gamePage->compileWithAnswers();

        $this->assertEquals('41', $gamePage->answerWays[0]);

        $gamePage = $gamePage->runAndGetNextPage(0);

        $this->assertEquals(6, $gamePage->character->health);
    }

    public function testDeath()
    {
        $character = new Character(CharactersLibrary::getCharacterTemplate(CharactersLibrary::EXPLORER));
        $character->health = 5;

        $gamePage = new GamePage('19',$character);

        $gamePage->run();
        $gamePage->compileWithAnswers();

        $this->assertEquals('end_health', $gamePage->answerWays[0]);
    }

    public function testKeyword()
    {
        $character = new Character(CharactersLibrary::getCharacterTemplate(CharactersLibrary::EXPLORER));
        $character->health = 10;
        $character->addKeyword(KeywordsLibrary::HAMMER);

        $gamePage = new GamePage('19',$character);

        $this->assertTrue($gamePage->character->hasKeyword(KeywordsLibrary::HAMMER));

        $nextPage = $gamePage->runAndGetNextPage(0);

        $this->assertFalse($nextPage->character->hasKeyword(KeywordsLibrary::HAMMER));
        $this->assertEquals('41', $nextPage->name);
    }
}