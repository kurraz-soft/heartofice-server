<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = 0;
?>
<p>
    Уличный торговец предлагает книги, брошюры
и диски, содержащие большой набор разрозненной
информации. Вы роетесь на полках и в старых коробках, пока не узнаете все, что нужно. «Гильгамеш» —
это название военного проекта вековой давности. Его
идея была в том, чтобы создать боевого дроида, невосприимчивого к управлению парадоксом, в надежде на
то, что армия таких бойцов могла бы одержать победу в Дью-Эне. Но потом Дью-Эн пал самостоятельно,
и по-видимому проект был заброшен.
</p>
<p>
    Вы уточняете расположение исследовательской
базы проекта «Гильгамеш». Она была в Гизе, прямо за стенами Кахиры.
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', $gamePage->character->hasSkill(\app\library\SkillsLibrary::KNOWLEDGE) ? 95 : 311);

});