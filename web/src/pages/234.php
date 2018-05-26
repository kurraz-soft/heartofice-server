<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = ($this->character->hasSkill(\app\library\SkillsLibrary::SURVIVAL) || $this->character->hasItem(\app\library\ItemsLibrary::FUR_COAT)) ? 0 : 1;
?>
<p>
    Почва под ногами — это спресованный гравий,
покрытый тонким слоем снега. Пока вы шли вперед,
с севера налетел резкий ветер, принося с собой сильный снегопад. Бледно-голубое небо покрывается хмурыми тучами, через которые просачивается достаточно дневного света, чтобы придать снегу серебристый
оттенок. Сгорбившись под ветром, вы с трудом продвигаетесь вперед, боясь остановиться и отдохнуть,
поскольку, возможно, вам уже не удастся подняться.
</p>
<?php if($this->character->health > $spend_health): ?>
<p>
    <span class="font-italic">(-1 здоровья)</span>
</p>
<p>
    Вы наконец доходите до Изиды и переходите на западный берег реки
по старому железному мосту. Отсюда и до горизонта
тянутся широкие просторы дюн цвета слоновой кости
под темным, как мокрый камень, небом. Это Ледяные
пустоши Сахары, тысячи километров неизведанной
пустыни, необитаемые снежные поля, изуродованные
несчетными арктическими штормами. Это ужасное
препятствие отделяет вас от вашей цели.
</p>
<?php endif; ?>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){

    $gamePage->character->addHealth(-$spend_health);

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', 393);

});