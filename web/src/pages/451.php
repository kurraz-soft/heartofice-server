<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = 0;
?>
<p>
    В таверне вы слышите, как пьяный громко заявляет бармену, что он оплатит свой выдающийся счет,
когда в город приедет его босс. Присоединившись
к беседе, вы узнаете, что он несколько недель ждет
потенциального работодателя, состоятельного члена Общества компаса. «Он очень влиятельный человек,— тихо говорит пьяный, глядя на бармена.— Я
буду в шоколаде, когда он меня наймет».
</p>
<p>
    «Почему он задерживается?» — интересуетесь вы.
</p>
<p>
    В разговор вмешивается бармен. «Если он шел через Апеннины, его задержка может быть вечной. Там
наверху, в холмах опасные мутанты».
</p>
<p>
    «Ха! — усмехается пьяный.— У него три фиджийских телохранителя — реально крупные ребята!»
</p>
<p>
    «Значит, мутанты не будут голодать этой зимой»,—
язвительно замечает бармен.
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    if($gamePage->character->hasSkill(\app\library\SkillsLibrary::KNOWLEDGE)
        || $gamePage->character->hasSkill(\app\library\SkillsLibrary::STREET_KNOWLEDGE))
        $gamePage->addAnswer('Продолжить...', 47);
    elseif($gamePage->character->hasItem(\app\library\ItemsLibrary::ID_CARD))
        $gamePage->addAnswer('Продолжить...', 69);
    else
        $gamePage->addAnswer('Продолжить...', 414);

});