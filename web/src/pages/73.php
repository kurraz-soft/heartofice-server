<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    Нужно решить что делать...
</p>
<?php
$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Подняться на лифте в библиотеку', 6);
    $gamePage->addAnswer('... в медпункт', 204);
    $gamePage->addAnswer('... в спортзал', 51);
    $gamePage->addAnswer('... в столовую', 94);
    $gamePage->addAnswer('Уйти', 311);

});