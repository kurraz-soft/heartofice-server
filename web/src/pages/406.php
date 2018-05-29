<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = 0;
?>
<p>
    «Ты слышал правила Вайры Сингха,— ворчит
Гарган четырнадцатая, тыкая пальцем в грудную клетку Гильгамеша.— Наемникам и слугам не разрешается
участвовать в экспедиции в катакомбы».
</p>
<p>
    Вы протестуете: «Гильгамеш — больше, чем слуга.
Он будет бесценным членом нашей команды».
</p>
<p>
    Она упорно качает головой: «Ты не возьмешь
с собой железку. Это последнее слово».
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Искать Вайру Сингха, чтобы узнать его мнение', 445);
    $gamePage->addAnswer('Продолжить настаивать на участии Гильгамеша в экспедиции', 427);
    $gamePage->addAnswer('Согласитесь оставить его', 16, function ($e, \app\models\GamePage $gamePage){
        $gamePage->character->removeKeyword(\app\library\KeywordsLibrary::GILGAMESH);
        $gamePage->character->addKeyword(\app\library\KeywordsLibrary::URUK);
    });

});