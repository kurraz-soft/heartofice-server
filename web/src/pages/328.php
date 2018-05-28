<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = 0;
?>
<p>
    Разумеется, Боше интересовала не только еда.
В то время, как он извлекал часть провизии из кармана мертвеца, другая его рука ловко стащила кошелек.
Он сунул награбленное в сапог, не сказав вам. Обыватель ни за что не заметил бы этого. Не отставая от
Боше в мастерстве, вы изымаете у него эти деньги,
пока он занимается обыском других трупов.
</p>
<p>
    В кошельке вы обнаруживаете 60 скадов. Боше, похоже, ничего не заподозрил.
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){

    $gamePage->character->money += 60;

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', $gamePage->character->hasUsablePsy(\app\library\SkillsLibrary::PARADOX_CONTROL)? 370 : 306);

});