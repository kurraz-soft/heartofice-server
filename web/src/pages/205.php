<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    Двое оставшихся охранников Шандора достают
маленькие кирки, которыми они врубаются в лед. Эти
сильные люди неутомимо работают, но вскоре становится ясно, что лед слишком твердый. Несмотря на
холод, они сбрасывают свои меховые куртки, и один
из них, повернувшись к Шандору и вытирая пот, застилающий его глаза, говорит: «Мы потратим много
часов на то, чтобы извлечь тело, босс».
</p>
<p>
    Шандор смотрит на вас и пожимает плечами.
«Просто откалывайте лед рядом с рукой. Достаньте меч».
</p>
<p>
    Проходит почти час, прежде чем им удается сделать это. Ветер стих, слышен лишь жутковатый стон,
когда он проносится по лощине, ведущей в пещеру.
Всего через пару часов наступит ночь. Вы подходите
к Шандору и вглядываетесь в ледяную стену.
</p>
<p>
    Там, где кирки освободили руку трупа, чистый
голубой лед покрылся паутиной белых трещин. Рука
безвольно повисает, короткий меч все еще зажат в ее
пальцах. Шандор подходит, чтобы взять его, сомневается и поворачивается к вам с гримасой отвращения.
«Меня не так легко напугать, но…». Он растерянно
хмыкает.
</p>
<p>
    Это короткий меч в японском стиле; его лезвие
все еще острое, как бритва, несмотря на легкий налет
ржавчины. Вы можете взять его, если хотите, если вы не возьмете меч, его заберет один из охранников.
</p>
<p>
    Вы замечаете кое-что странное, рассматривая
руку трупа. Светло-фиолетовый оттенок кожи можно списать на его пребывание во льду, но длинный
указательный палец и волосы на ладони не так легко
объяснить.
</p>
<?php

$this->setScenario('takeItems');

$inv = new \app\models\Inventory();
$inv->add(\app\library\ItemsLibrary::SHORT_SWORD);

$this->params = [
    'takeItems' => $inv->toArray(),
];

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', $gamePage->character->hasSkill(\app\library\SkillsLibrary::KNOWLEDGE)?183:270);

});