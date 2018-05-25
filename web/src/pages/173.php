<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    Не рассчитав прыжок, вы промахиваетесь на расстояние вытянутой руки и проваливаетесь сквозь туман с высоты двадцати этажей навстречу гибели на
твердых каменных плитах.
</p>
<?php

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Это конец', 'end_empty');

});