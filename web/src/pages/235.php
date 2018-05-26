<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    Вас терзают приступы рвоты, и ночь не приносит
отдыха. Когда на небе появляется серебристая предрассветная полоска, вы поднимаетесь и проводите
дрожащими пальцами по покрытим потом волосам.
</p>
<?php

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', $gamePage->character->hasItem(\app\library\ItemsLibrary::ANTIDOTE_PILLS) ? 320 : 342);

});