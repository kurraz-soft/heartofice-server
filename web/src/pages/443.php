<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = 0;
?>
<p>
    Вам нужна защита от дневного света, который
отражается снегом и режет глаза. Оторвав две тонкие полосы от подкладки рукавов, вы повязываете
их вокруг глаз, оставляя только узкую щель для обзора. Это должно помочь от снежной слепоты. Если
бы и с остальными опасностями Сахары удалось справиться так легко!
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', 403);

});