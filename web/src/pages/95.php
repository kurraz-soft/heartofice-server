<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
Нужно решить что делать...
</p>

<?php

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    if($gamePage->character->hasItem(\app\library\ItemsLibrary::ID_CARD))
        $gamePage->addAnswer('Использовать ID-карту', 353);

    $gamePage->addAnswer('Разузнать о бароне Сириазисе', 401);
    $gamePage->addAnswer('... о Чейме Голготе', 422);
    $gamePage->addAnswer('... о Гильгамеше', 380);
    $gamePage->addAnswer('... о Сфинксе', 11);
    $gamePage->addAnswer('Отдохнуть', 311);
});