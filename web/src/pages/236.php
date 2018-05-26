<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    Он с интересом выслушивает ваше объяснение,
как можно разрушить Сердце, если два человека будут действовать сообща. «Подходящее применение
для твоего прекрасного бризального пистолета»,— заключаете вы с мрачной усмешкой.
</p>
<p>
    Он кивает и наклоняется к вам, положив руку на
плечо. «Конечно, ты прав. Я рад, что ты доверился
мне. Мы должны держать это в тайне от остальных.
Они просто бешеные псы, которым наплевать, выживет этот мир или погибнет».
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage){

    $gamePage->character->addKeyword(\app\library\KeywordsLibrary::YELLOW);

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', 192);

});