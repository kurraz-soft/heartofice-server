<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    Вы выходите из лифта и видите, что Сингх, Боше
и Голгот уже здесь. Тадра Бей не прошла.
</p>
<p>
    Вы находитесь под куполом, таким обширным,
что он кажется частью черной пустоты межгалактического пространства. Свет фонаря Боше не достигает дальней стены. В центре зала на помосте в конце
подъема лежит пурпурный драгоценный камень почти
два метра в диаметре. Искристые сполохи мерцают
в глубине его ядра, порождая болезненное для глаз
фиолетовое излучение.
</p>
<p>
    «Сердце Волента,— выдыхает Боше с благоговением,— ключ к абсолютной власти!»
</p>

<?php

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    if($gamePage->character->hasKeyword(\app\library\KeywordsLibrary::RED))
        $gamePage->addAnswer('Продолжить...', 303);
    elseif($gamePage->character->hasKeyword(\app\library\KeywordsLibrary::BLUE))
        $gamePage->addAnswer('Продолжить...', 346);
    elseif($gamePage->character->hasKeyword(\app\library\KeywordsLibrary::YELLOW))
        $gamePage->addAnswer('Продолжить...', 324);
    else
        $gamePage->addAnswer('Продолжить...', 367);

});