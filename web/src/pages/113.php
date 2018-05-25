<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    Вскоре вы находите человека, который может сделать то, что вам надо: это толстый потный мужик с кучей разнообразных древних инструментов иустройств,
загромоздивших его магазин. Включив ручной лазер,
он ловко вносит несколько изменений в изображение
на карте, пока оно не становится похожим на ваше
собственное лицо. «Пять скадов,» — говорит он, протягивая вам карточку. «Пять?» — хмуритесь вы.
</p>
<p>
    «Членство в престижном Обществе компаса стоит
обычно намного дороже,» — пожимает он плечами.
</p>
<p>
    Вы оцениваете возможность выхватить карту
и слинять, но толстяк, видимо, ожидает чего-то подобного и держит ее близко к лазерному лучу, ожидая
оплаты.
</p>
<p>
    При отказе заплатить, он уничтожит ИД-карту
</p>
<?php

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $spend_money = 5;

    if($gamePage->character->money > $spend_money)
        $gamePage->addAnswer('Заплатить', 414, function ($e, \app\models\GamePage $gamePage) use ($spend_money){
            $gamePage->character->spendMoney($spend_money);
            $gamePage->character->addKeyword(\app\library\KeywordsLibrary::PROTEUS);
        });

    $gamePage->addAnswer('Отказаться', 414, function ($e, \app\models\GamePage $gamePage){
        $gamePage->character->removeFromInventory(\app\library\ItemsLibrary::ID_CARD);
    });
});