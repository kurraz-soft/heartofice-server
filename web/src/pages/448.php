<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = 0;
?>
<p>
    Так как ваши компаньоны расположились рядом
с пандусом, ведущим к Сердцу, продолжая следить
друг за другом, вы бросаете стазис-бомбу прямо в них.
Она активируется до того, как они могут убежать и заставляет их замереть, подобно статуям.
</p>
<p>
    Вы обошли их. Из всех путешественников, отправившихся в Дью-Эн, остались только вы.
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){
    $gamePage->character->removeFromInventory(\app\library\ItemsLibrary::STASIS_BOMB);
});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', 73);

});