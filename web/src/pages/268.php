<?php
/**
 * @var \app\models\GamePage $this
 */

?>
<p>
    Вы направляетесь вверх по течению реки. Вихри
мокрого снега проносятся в вечернем небе. Повернув
на запад, вы летите к пирамидам Гизы, которые вырисовываются на фоне слабого отблеска заката. Сфинкс
возлежит среди сугробов, его лицо покрыто инеем.
Вы приземляетесь и бредете через покрытую льдом
равнину к древним руинам.
</p>
<?php

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Продолжить...', 440);

});