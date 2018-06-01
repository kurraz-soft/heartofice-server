<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    Вы возвращаетесь к своему лагерю под кровом
разрушенных зданий и устраиваетесь на ночь. Огни
костра отбрасывают на стены длинные пляшущие
тени. Почва настолько холодная, что кажется, что она
высасывает из вас жизненные силы. Как давно вы ели
в последний раз? Если у вас есть еда, вы можете восстановить 1 единицу Здоровья. Еще 1 единицу можно
восстановить при наличии аптечки (имейте в виду, что
если у вас есть аэрокар «Скат», то в его багажнике лежит аптечка и несколько упаковок с едой).
</p>
<?php

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    if($gamePage->character->hasItem(\app\library\ItemsLibrary::AEROCAR_SCAT))
        $gamePage->addAnswer('Поужинать и перевязать раны', '192_eat_and_heal_car');
    elseif($gamePage->character->hasItem(\app\library\ItemsLibrary::FOOD_PACK) && $gamePage->character->hasItem(\app\library\ItemsLibrary::MEDPACK))
        $gamePage->addAnswer('Поужинать и перевязать раны', '192_eat_and_heal');
    elseif($gamePage->character->hasItem(\app\library\ItemsLibrary::FOOD_PACK))
        $gamePage->addAnswer('Поужинать', '192_eat');

    $gamePage->addAnswer('Продолжить...', '192_1');

});