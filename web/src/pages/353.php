<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = 0;
?>
<p>
    Карта указывает, что ее держатель является членом Общества компаса, тайной организации избранных, владельцев значительной части ресурсов во всем
мире. В Кахире у Общества есть собственное здание.
Вы стоите на другой стороне улицы и смотрите на
башню из стали и стекла, возвышающуюся над сырым
вечерним туманом. В бесцветном флуоресцентном
свете холла вы видите администратора за стойкой.
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    if($gamePage->character->hasKeyword(\app\library\KeywordsLibrary::PROTEUS))
        $gamePage->addAnswer('Продолжить...', 374, function ($e, \app\models\GamePage $gamePage){
            $gamePage->character->removeKeyword(\app\library\KeywordsLibrary::PROTEUS);
        });
    elseif($gamePage->character->hasSkill(\app\library\SkillsLibrary::STEALING) || $gamePage->character->hasSkill(\app\library\SkillsLibrary::CHAMELEON_SKIN))
        $gamePage->addAnswer('Продолжить...', 396);
    elseif($gamePage->character->hasUsablePsy(\app\library\SkillsLibrary::PARADOX_CONTROL))
        $gamePage->addAnswer('Продолжить...', 417);
    else
    {
        $gamePage->addAnswer('Войти и попытаться проскочить мимо администратора', 436);
        $gamePage->addAnswer('Отказаться от попытки проникнуть внутрь', 311);
    }
});