<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    На нем красно-фиолетовая форма Наблюдательного корпуса, личных войск Элезара Пикарда, Верховного жреца Дью-Эна. Возможно, он сражался за
него, когда восстало население города.
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage){

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    if($gamePage->character->hasLoadedFirearm())
        $gamePage->addAnswer('Освободить его, с помощью выстрела из бризального пистолета, который уничтожит стазис-бомбу ', 345);

    if($gamePage->character->hasUsablePsy(\app\library\SkillsLibrary::PARADOX_CONTROL))
        $gamePage->addAnswer('Освободить его, используя Управление парадоксом для прекращения эффекта искажения времени', 366);

    $gamePage->addAnswer('Двигаться дальше', 388);

});