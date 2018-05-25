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

class GamePageTest extends UnitTestCase
{
    public function testAllPagesBasic()
    {
        $pages_dir_path = __DIR__ . '/../../pages';

        $dir = opendir($pages_dir_path);

        while (($file = readdir($dir)) !== false)
        {
            if($file == '.' || $file == '..') continue;

            list($name, $ext) = explode('.', $file);

            $gamePage = new GamePage($name, new Character(CharactersLibrary::CHARACTERS[CharactersLibrary::EXPLORER]));
            $gamePage->compileWithAnswers();
        }
        $this->assertTrue(true);
    }
}