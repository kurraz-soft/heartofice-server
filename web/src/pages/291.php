<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    Вы разбужены прикосновением чьих-то пальцев
к лицу. По ощущению они не отличаются от сосулек.
Вы смотрите вверх и в серебряном блеске лунного
света видите, что кто-то склонился над вами. Вы открываете рот, чтобы закричать, но единственный звук,
который вы можете выдавить из моментально пересохшего горла — это сиплый хрип. Перед вами стоит
тот самый человек, которого вы видели замороженным в леднике!
</p>
<p>
    Вы пытаетесь вжаться в скалу и подобрать ноги,
но неуклонно соскальзываете обратно в горизонтальное положение. Человек наблюдает за вами со странным выражением прихотливой угрозы, как кошка,
столкнувшаяся со странно выглядящей канарейкой.
</p>
<p>
    Раскрытая ладонь упирается в снег рядом с вашей ногой. Голова быстро приближается, и человек
пристально смотрит на вас остекленевшими глазами.Вы озираетесь, захлебываясь от ужаса. Шандор и его
люди были жестоко убиты пока вы спали.
</p>
<p>
    Странный человек улыбается, но его улыбку никак нельзя назвать человеческой. Он похож на ожившую тень. Удивительно, что он не замерз до смерти
в этом тонком комбинезоне. Его рука цвета слоновой
кости поднимается. «Меч,— шепчет он.— Мой меч. Верни его».
</p>
<?php

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $ok = false;

    if($gamePage->character->hasSkill(\app\library\SkillsLibrary::MELEE_FIGHT))
    {
        $gamePage->addAnswer('Использовать Рукопашный бой', 398);
        $ok = true;
    }

    if($gamePage->character->hasSkill(\app\library\SkillsLibrary::PARADOX_CONTROL)
        && $gamePage->character->hasItem(\app\library\ItemsLibrary::PSY_FOCUSER))
    {
        $gamePage->addAnswer('Использовать Управление Парадоксом', 377);
        $ok = true;
    }
    if($gamePage->character->hasSkill(\app\library\SkillsLibrary::SHOOTING)
        && $gamePage->character->hasItem(\app\library\ItemsLibrary::GUN)
        && $gamePage->character->inventory[\app\library\ItemsLibrary::GUN]->count
    )
    {
        $gamePage->addAnswer('Использовать пистолет', 355);
        $ok = true;
    }

    if(!$ok)
        $gamePage->addAnswer('Подняться на крышу', 419);

});