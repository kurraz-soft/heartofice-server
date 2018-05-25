<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    Вы возвращаетесь на поверхность. Янус Гаунт
и Тадра Бей уже в лагере. Они рассказывают вам, что
исследовали лабиринт туннелей под площадью, но без
всякой пользы. «Все, что мы нашли — это подвалы,
полные гнилого зерна»,— ворчит Бей.
</p>
<p>
    Длинный свет заката заливает руины, когда возвращаются Вайра Сингх и барон. Вы вскоре узнаете,
что они следовали разными путями, которые сошлись
в большом подземном зале. Они, очевидно, взволнованы своим открытием. «Мы обнаружили границы
храма,— объявляет Вайра Сингх, жестом показывая
на группу зданий на другой стороне площади.— Сердце Волента где-то под ними. Завтра поиски могут завершиться».
</p>
<?php

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', 38);

});