<?php
/**
 * @var \app\models\GamePage $this
 */
?>
<p>
    «Разве это не очевидно? — любезно спрашивает
Боше.— Вдвоем путешествовать гораздо безопасней,
чем в одиночку. На дороге полно бандитов».
</p>
<p>
    Вы видите некую фальшь в змеиной улыбке
Боше — вне всяких сомнений, его искренность показная. У вас же никогда не было желания проснуться
одним прекрасным утром на мели и без штанов. «Если
и есть вещь, которую я знаю точно, так это то, что
грабитель — это ты»,— говорите вы ему в лицо.
</p>
<p>
    Пока он приходит в себя после вашего ответа,
вы уходите прочь, с трудом пробираясь по снегу. Теперь надо решить, какой дорогой идти.
</p>

<?php

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Отправиться на восток, в Венезию и потом в Кахиру', 139);
    $gamePage->addAnswer('Последовать совету трактирщика и пойти на запад, через Лионесские джунгли', 221);

});