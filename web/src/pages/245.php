<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
   Наконец, вы находите человека, который может
вам помочь: это толстый потный парень, который разложил множество древних инструментов и устройств
рядом со своим магазином. Орудуя ручным лазером,
он вносит некоторые искусные изменения в фотографию на карте, доводя ее до сходства с вами. «Пять
скадов»,— говорит он, протягивая ее вам. «Пять?» —
вы сердито смотрите на него.
</p>
<p>
    «Членство в престижном Обществе компаса обычно стоит гораздо дороже»,— замечает он, пожимая
плечами.
</p>
<p>
    Вы намереваетесь забрать карту, но толстяк ловко опережает вас и подносит ее вплотную к лазерному лучу, ожидая оплаты.
Если вы откажетесь заплатить, он уничтожит ИД-карту.
</p>
<?php

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    if($gamePage->character->money >= 5)
        $gamePage->addAnswer('Заплатить', 329, function ($e, \app\models\GamePage $gamePage){

            $gamePage->character->spendMoney(25);
            $gamePage->character->addKeyword(\app\library\KeywordsLibrary::PROTEUS);

        });

    $gamePage->addAnswer('Отказать', 25, function ($e, \app\models\GamePage $gamePage){

        $gamePage->character->removeFromInventory(\app\library\ItemsLibrary::ID_CARD);

    });

});