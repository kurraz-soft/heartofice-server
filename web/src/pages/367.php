<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = 0;
?>
<p>
    Это момент истины. Четыре могущественных путешественника находятся в пределах досягаемости
максимальной мощи. Только один из них может получить Сердце.
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $ok = false;

    if($gamePage->character->hasItem(\app\library\ItemsLibrary::SOUND_GRENADE))
    {
        $gamePage->addAnswer('Использовать шумовую гранату', 432);
        $ok = true;
    }
    if($gamePage->character->hasItem(\app\library\ItemsLibrary::STASIS_BOMB))
    {
        $gamePage->addAnswer('Использовать стазис-бомбу', 448);
        $ok = true;
    }
    if($gamePage->character->hasLoadedFirearm())
    {
        $gamePage->addAnswer('Использовать пистолет', 21);
        $ok = true;
    }

    if(!$ok)
        $gamePage->addAnswer('Продолжить...', 324);
});