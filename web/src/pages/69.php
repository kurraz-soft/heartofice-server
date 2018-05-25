<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    Препятствием к использованию карты является
голографическая фотография на лицевой стороне,
человек, изображенный там совершенно не похож на вас.
</p>
<?php

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    if($gamePage->character->hasSkill(\app\library\SkillsLibrary::STEALING))
    {
        $gamePage->addAnswer('Воспользоваться навыком Воровство', 452);
    }else
    {
        $gamePage->addAnswer(
            'Попытаться изменить фотографию',
            $gamePage->character->hasSkill(\app\library\SkillsLibrary::STREET_KNOWLEDGE) ? 113 : 135
        );
    }

    $gamePage->addAnswer('Заняться чем-то еще', 414);

});