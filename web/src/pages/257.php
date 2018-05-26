<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    Ваши пальцы выглядят обмороженными, и у вас
есть несколько небольших ран и кровоподтеков. Вы вкалываете себе антибиотик и используете мазь и бинты из аптечки.
</p>
<p>
    <span class="font-italic">(+1 здоровья)</span>
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage){

    $gamePage->character->addHealth(1);

    //TODO убрать таблетки антибиотика и аптечку?
});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', 278);

});