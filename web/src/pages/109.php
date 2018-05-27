<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    У Вайры Сингха возникла та же идея в то же самое время. Взгляд Голгота перескакивает от Сингха
к вам, но он колеблется слишком долго. Вы стреляете
первым, и Голгот валится на пол. Сингх, недолго думая, разворачивает свою мантрамукту, целясь в вас.
</p>
<p>
    Боше стреляет в Сингха, но заряд лишь рассыпается снопом искр, ударившись о броню. Это последнее, что вы видите, так как мгновение спустя ваше
существование прекращается под рев мантрамукты.
</p>
<?php

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Это конец', 'end_empty');

});