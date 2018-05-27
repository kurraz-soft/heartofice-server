<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    Вайра Сингх бьет по спуску своей пушки и разворачивает ее, направляя на Голгота. Но агент РСШ
не теряется. Он хватает Боше и толкает его в зону
поражения. Боше умирает на месте, и в то же самое
время Голгот бросает емкость, из которой вырывается
плотное облако белого дыма.
</p>
<p>
    В разрастающемся облаке Сингх едва виднеется
как призрак. Держа наготове свою пушку, он вглядывается в дым в поисках малейшего движения. Вы
потеряли Голгота из вида.
</p>
<?php

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    if($gamePage->character->hasLoadedFirearm())
        $gamePage->addAnswer('Атаковать Сингха с помощью бризального пистолета', 20, function ($e, \app\models\GamePage $gamePage){

            $gamePage->character->decreaseInventoryItemCnt(\app\library\ItemsLibrary::GUN);

        });

    if($gamePage->character->hasItem(\app\library\ItemsLibrary::SOUND_GRENADE))
        $gamePage->addAnswer('Атаковать Сингха с помощью шумовой гранаты', 20, function ($e, \app\models\GamePage $gamePage){

            $gamePage->character->removeFromInventory(\app\library\ItemsLibrary::SOUND_GRENADE);

        });

    $gamePage->addAnswer('Подойти ближе чтобы прикрыть его', 42);
    $gamePage->addAnswer('Отступить в сторону и подождать, что будет дальше', 262);

});