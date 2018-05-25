<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    Вам удается перепрыгнуть пропасть и ухватиться
за балку, выступающую из крыши противоположного здания. Вы карабкаетесь через парапет и убегаете,
слыша за спиной пустые угрозы фиджийца.
</p>
<?php

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', 311);

});