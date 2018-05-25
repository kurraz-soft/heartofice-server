<?php
/**
 * @var \app\models\GamePage $this
 */

use app\library\CharactersLibrary;

$this->setScenario('charSelect');

$this->params = array_values(CharactersLibrary::CHARACTERS);

$this->getEventsManager()->attach('GamePage:beforeNextPage', function (\Phalcon\Events\Event $event, \app\models\GamePage $gamePage, $answer) {
    foreach ($gamePage->params as $param)
    {
        $gamePage->addAnswer($param['class'],'0');
    }
    $gamePage->character = new \app\models\Character($gamePage->params[$answer]);
});