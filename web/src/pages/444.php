<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = 0;
?>
<p>
    Голод завязывает внутренности в ледяной узел;
из-за усталости ваши ноги наливаются свинцовой
тяжестью. Каждое утро вам все тяжелее приходить
в себя от сонной апатии. Любое усилие требует большой концентрации.
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $food_cnt = $gamePage->character->inventory->getQuantity(\app\library\ItemsLibrary::FOOD_PACK);

    if($food_cnt >= 2)
    {
        $gamePage->addAnswer('Продолжить...', 125, function ($e, \app\models\GamePage $gamePage){
            $gamePage->character->removeFromInventory(\app\library\ItemsLibrary::FOOD_PACK);
            $gamePage->character->removeFromInventory(\app\library\ItemsLibrary::FOOD_PACK);
        });
    }elseif($food_cnt == 1)
    {
        $gamePage->addAnswer('Продолжить...', 37, function ($e, \app\models\GamePage $gamePage){
            $gamePage->character->removeFromInventory(\app\library\ItemsLibrary::FOOD_PACK);
        });
    }else
    {
        $gamePage->addAnswer('Продолжить...', 147);
    }

});