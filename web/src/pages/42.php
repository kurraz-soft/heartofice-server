<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    Бризальные заряды вылетают из дыма и проносятся в каких-то сантиметрах от вас. Сингх поворачивается и пристально смотрит в том направлении.
«Я все еще не вижу его»,— бормочет он мрачно.
</p>
<?php

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){
    if($gamePage->character->hasSkill(\app\library\SkillsLibrary::SHOOTING)
        && $gamePage->character->hasItem(\app\library\ItemsLibrary::GUN)
        && $gamePage->character->inventory[\app\library\ItemsLibrary::GUN]->count
    )
        $gamePage->addAnswer(
            'Выстрелить из пистолета в ответ',
            64,
            function ($e, \app\models\GamePage $gamePage){
                $gamePage->character->decreaseInventoryItemCnt(\app\library\ItemsLibrary::GUN, 1);
            }
        );

    $gamePage->addAnswer(
        'Подкрасться под завесой дыма ближек стрелявшему',
        86
    );
    $gamePage->addAnswer(
        'Отступить, выбраться из дыма и оглядеться',
        108
    );
});