<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = 0;
?>
<p>
   Любопытно… Их воспоминания и мыслительные процессы практически идентичны. Обе горды, не
склонны к компромиссам и убеждены в своем превосходстве над людским стадом. Вы сканируете глубже,
открывая изображения убийств и ужасных жестокостей. Когда-то у них было двенадцать таких же сестер — очевидно, клонов. Скорее всего, с военным
или преступным прошлым. Погрузившись еще глубже,
вы находите воспоминание о Глоси. Они тоже слышали передачу. Так же, как и вы, они направляются
в Дью-Эн!
</p>
<p>
    Очевидно одно: было бы опрометчиво начинать
заварушку до того, как вы узнаете о них больше.
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    if($gamePage->character->hasSkill(\app\library\SkillsLibrary::MELEE_FIGHT))
        $gamePage->addAnswer('Напасть на них',76);
    if($gamePage->character->hasSkill(\app\library\SkillsLibrary::TRICKERY))
        $gamePage->addAnswer('Просвести их с помощью Хитрости',120);

    $gamePage->addAnswer('Спокойно посидеть и подождать',54);
});