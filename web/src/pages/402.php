<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = 0;
?>
<p>
    Время пришло. Вы готовы лучше, чем когда бы
то ни было. Забросив свою поклажу на плечо, вы быстро идете к городским воротам. Спустившись вниз на
подъемнике на поверхность земли, вы выходите из-за
бетонной опоры на промозглый ветер. Туман курится,
как дымок над мутной рекой. На западе раскинулись
ослепительно белые заснеженные просторы Сахары.
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Свернуть к пирамидам Гизы', 423);
    $gamePage->addAnswer('Направиться прямо через Сахару к Дью-Эну', $gamePage->character->hasItem(\app\library\ItemsLibrary::AEROCAR_SCAT) ? 289 :393);

});