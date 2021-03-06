<?php
/**
 * @var \app\models\GamePage $this
 */

$spend_health = 0;
?>
<p>
    Одна из дверей открывается, пропуская вас в короткий коридор, который приводит в тускло освещенную комнату. На постаменте в центре стоит большая
человекообразная фигура, чья черно-фиолетовая
броня мерцает в неярком свете. Когда вы подходите,
в ее смотровых щелях зажигаются огни, и внезапно
вы замираете, ощущая на себе взгляд нечеловеческого
разума. Затем фигура произносит звучным механическим голосом: «Я Гильгамеш. Назовите себя».
</p>
<p>
    «Меня прислала Глоси,— отвечаете вы.— мы направляемся в Дью-Эн».
</p>
<p>
    Несмотря на вашу неуверенность, робот кажется
принимает ваше объяснение. С лязгающим звуком он
спускается с постамента. Все ваши инстинкты требуют, чтобы вы развернулись и бежали прочь, но вы заставляете себя спокойно ждать, наблюдая приближение Гильгамеша. Тяжелые бронированные пластины
его тела не оставляют у вас сомнений, что он был создан для сражений. На его предплечье закреплен ствол
бластера, соединенный кабелями с аккумулятором на
широких плечах.
</p>
<p>
    Он останавливается в метре от вас, уставившись
в пространство над вашей головой. «Готов служить
вам»,— раздается резкий электронный голос.
</p>
<p>
    «Тогда пойдем»,— говорите вы.
</p>
<?php

$this->attachCalculations(function ($e, \app\models\GamePage $gamePage) use ($spend_health){
    $gamePage->character->addKeyword(\app\library\KeywordsLibrary::GILGAMESH);
});

$this->attachDynamicAnswers(function ($e, \app\models\GamePage $gamePage){

    $gamePage->addAnswer('Подняться на уровень выше ',276);
    $gamePage->addAnswer('Покинуть пирамиду',361);

});