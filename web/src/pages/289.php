<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    С высоты тридцати метров Ледяные пустоши напоминают сверкающее море снега с островками голых
черных скал. Ветер со свистом гуляет по земле, гоняя
клубы снежной пыли, которые образуют странные
фигуры на окружающих скалах. Вы почти не видите признаков жизни. Это одна из самых заброшенных
областей в мире. Дневной свет мрачен и бледен, сумерки похожи на голубоватый дым, а ночное небо покрыто тысячами звезд, сияющих в разрывах огромных
кучевых облаков.
</p>
<p>
    Неуловимо проходят дни. И наконец, всматриваясь вдаль, вы видите мрачные черные стены разрушенного города. Вы прибыли в Дью-Эн.
</p>
<?php

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    if($gamePage->character->hasKeyword(\app\library\KeywordsLibrary::DIAMOND))
        $gamePage->addAnswer('Продолжить...', 191, function ($e, \app\models\GamePage $gamePage){
            $gamePage->character->removeKeyword(\app\library\KeywordsLibrary::DIAMOND);
        });
    else
        $gamePage->addAnswer('Продолжить...', 213);
    
});