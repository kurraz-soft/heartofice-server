<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    Ваша воля уже слабеет, и все, что вы можете
предпринять — это нащупать гранату у пояса. Сорвав
чеку, вы без размаха бросаете ее на пол, и она катится в сторону барона. Мозг приближается, и в тот
момент, когда он пролетает над гранатой, раздается
оглушительный взрыв. Мозг, как смятая красная тряпка, падает на пол.
</p>
<p>
Пока он оглушен, вы давите его пяткой окованного сапога. Вам хочется заглушить предсмертный
вопль, который отзывается телепатическим эхом в вашем сознании. Но вы знаете, что он останется с вами
до смертного часа.
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage){

    $gamePage->character->removeFromInventory(\app\library\ItemsLibrary::SOUND_GRENADE);

});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', 261);

});