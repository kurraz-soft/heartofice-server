<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\models;


class GamePageLoader
{
    /**
     * @param $page
     * @param Character $character
     * @param $answer
     * @return GamePage
     */
    static public function loadNextPage($page, Character $character, $answer)
    {
        $game_page = new GamePage($page, $character);

        $game_page = $game_page->runAndGetNextPage($answer);
        $game_page->compileWithAnswers();

        return $game_page;
    }
}