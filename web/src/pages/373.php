<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = 0;
?>
<p>
    Сверкающий луч озаряет коридор, разрывая воздух ультразвуком. Вы слышите шипение расплавленного металла, и что-то взрывается в сполохе искр. Подойдя ближе, вы обнаруживаете тех-дроида, который
слабо дергается на полу, как раздавленный металлический муравей. Вам ничто не угрожало; он обходил
комплекс в поисках вещей, требующих ремонта, как
должно быть, делал на протяжении веков.
</p>
<p>
    Злясь на себя за то, что поддались панике
и зря потратили заряд, вы углубляетесь в темную сеть туннелей.
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){

    $gamePage->character->decreaseInventoryItemCnt(\app\library\ItemsLibrary::GUN);

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', 435);

});