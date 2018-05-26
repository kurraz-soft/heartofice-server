<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    Голгот проверяет оружие Боше, но заряд израсходован.
</p>
<?php

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    if($gamePage->character->hasItem(\app\library\ItemsLibrary::GUN)
        && $gamePage->character->inventory[\app\library\ItemsLibrary::GUN]->count)
        $gamePage->addAnswer('Продолжить...', 219);
    else
        $gamePage->addAnswer('Продолжить...', 263);

});