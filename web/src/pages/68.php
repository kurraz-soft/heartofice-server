<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    Знакомый световой импульс появляется в вечерней мгле, мгновенно освещая нависающие скалы
дневным светом. Тонкая струйка испарившегося от
перегретого воздуха снега улетает в сторону скал. Вы
довольны выстрелом — фигура вскидывает руки и падает на землю.
</p>
<p>
    «Это было опрометчиво,— вздыхает Боше.— Возможно, ты только что убил потенциального союзника».
</p>
<p>
    Вы спускаетесь с выступа и приближаетесь к телу.
«Давай узнаем»,— говорите вы через плечо. Враг выглядит мертвым, но вы соблюдаете осторожность и не
сводите с него оружие.
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage){

    $gamePage->character->decreaseInventoryItemCnt(\app\library\ItemsLibrary::GUN);

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', 90);

});