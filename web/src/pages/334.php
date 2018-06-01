<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = 0;
?>
<p>
    Когда вы подходите к Венезии, сгущаются сумерки. Древний город сверкает тысячью огней под небом,
цвета тусклой позеленевшей бронзы. Голод и холод
гонят вас вперед по окраинным улицам. Вы минуете
временные хижины, где останавливаются охотники
и торговцы, затем трущобы из гофрированного железа и пластика, заполняющие узкие улицы, которые,
как говорят, были когда-то каналами.
</p>
<p>
    За ними виднеются кварталы древних площадей,
где богатые и влиятельные жители обитают в роскошных зданиях, укрепленных деревянными лесами для
предотвращения их от разрушающего действия времени.
</p>
<p>
    Вскоре вы узнаете, что паром до Кахиры не идет
в ближайшие дни. У вас есть выбор, где остановиться
на это время.
</p>
<p>
    Роскошный отель «Марко Поло» будет
стоить 12 скадов за две ночи; гостиница «Парадиз» —
6 скадов; пользующийся сомнительной репутацией
«Постоялый двор Дожа» — всего 3 скада.
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('«Марко Поло» - 12 скадов', $gamePage->character->hasItem(\app\library\ItemsLibrary::ID_CARD) ? 222 : 286, function ($e, \app\models\GamePage $gamePage){
        $gamePage->character->spendMoney(12);
    });
    $gamePage->addAnswer('«Парадиз» - 6 скадов', 244, function ($e, \app\models\GamePage $gamePage){
        $gamePage->character->spendMoney(6);
    });
    $gamePage->addAnswer('«Постоялом дворе Дожа» - 3 скадов', 371,function ($e, \app\models\GamePage $gamePage){
        $gamePage->character->spendMoney(3);
    });

});