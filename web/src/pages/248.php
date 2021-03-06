<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = 2;
?>
<p>
    Фиджиец силен и хорошо тренирован, но вы более пластичны. Он наносит удар ногой. Скользнув
в сторону, вы хватаете его за щиколотку и лишаете
равновесия. Не позволив вам вывихнуть ему колено,
противник падает назад, и, опираясь руками об пол,
наносит удар обеими ногами, отбрасывающий вас
спиной к стене.
</p>
<p>
    <span class="font-italic">(-<?= $spend_health ?> здоровья)</span>
</p>
<?php if($this->character->health > $spend_health): ?>
<p>
    Вы оглушены ударом, что позволяет вашему оппоненту подняться на ноги. Он с ревом бросается на
вас. Вы готовитесь отразить атаку и случайно натыкаетесь на настенный огнетушитель. Ну что ж, никаких
угрызений совести — в такой схватке сойдет любое
оружие. Струя пены ослепляет фиджийца на достаточное время, чтобы вы успели приложить его огнетушителем в висок. Ваш противник падает, как мешок,
набитый кирпичами.
</p>
<p>
    Вы наклоняетесь, и проверив его пульс, с облегчением обнаруживаете, что он еще жив. Вам лучше
убраться отсюда до того, как он придет в себя.
</p>
<?php endif; ?>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health) {

    $gamePage->character->addHealth(-$spend_health);

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', $gamePage->character->health > 0 ? 311 : 'end_health');

});