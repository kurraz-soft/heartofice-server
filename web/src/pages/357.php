<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = 0;
?>
<p>
    Панель отгибается и с треском выламывается. Вы
выныриваете из-под одеяла, завешивающего стену.
Костер потрескивает в центре зала, настолько обветшалого, что больше напоминает пещеру. Коврик закрывает вход, отсекая бушующую снаружи снежную
бурю. В помещении довольно тепло, и стоит сильный
запах застарелого пота, источником которого являются трое здешних обитателей.
</p>
<p>
    Судя по множеству шкур, разбросанных вдоль
стен, эти трое — охотники. Они вскакивают на ноги.
Их удивление вашим внезапным появлением быстро
проходит, уступая место враждебности. Двое из них
достают оружие: один — длинный нож, другой, ближайший к огню — бризальный пистолет.
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $ok = false;

    if($gamePage->character->hasSkill(\app\library\SkillsLibrary::MELEE_FIGHT))
    {
        $gamePage->addAnswer('Использовать Рукопашный бой', 97);
        $ok = true;
    }
    if($gamePage->character->hasSkill(\app\library\SkillsLibrary::SHOOTING) && $gamePage->character->hasLoadedFirearm())
    {
        $gamePage->addAnswer('Использовать пистолет', 119);
        $ok = true;
    }
    if($gamePage->character->hasSkill(\app\library\SkillsLibrary::TRICKERY))
    {
        $gamePage->addAnswer('Использовать Хитрость', 185);
        $ok = true;
    }
    if($gamePage->character->hasSkill(\app\library\SkillsLibrary::STEALING))
    {
        $gamePage->addAnswer('Использовать Воровство', 163);
        $ok = true;
    }
    if($gamePage->character->hasSkill(\app\library\SkillsLibrary::AGILITY))
    {
        $gamePage->addAnswer('Использовать Ловкость', 207);
        $ok = true;
    }

    if(!$ok)
        $gamePage->addAnswer('Продолжить...', 272);
});