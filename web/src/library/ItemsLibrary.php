<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\library;


class ItemsLibrary
{
    const GUN = 'Бризальтовый пистолет';
    const PSY_FOCUSER = 'Пси-фокусировщик';
    const SOUND_GRENADE = 'Шумовая граната';
    const BURREK = 'Буррек';
    const WARM_CLOTH = 'Комплект теплой одежды';
    const FUR_COAT = 'Шуба';
    const FLASHLIGHT = 'Фонарик';
    const LAMP = 'Лампа';
    const ROPE = 'Моток веревки';
    const BULLETPROOF_VEST = 'Бронежилет';
    const ANTIDOTE_PILLS = 'Таблетки антидота';
    const CYBORG_PARTS = 'Части киборга';
    const ID_CARD = 'ID-карта';
    const MINI_GLOSY = 'Мини-Глоси';
    const GAS_MASK = 'Противогаз';
    const BINOCULARS = 'Бинокль';
    const RIFLE = 'Бризальтовое ружье';
    const POLARIZED_GLASSES = 'Поляризационные очки';
    const AEROCAR_SCAT = 'Аэрокар "Скат"';
    const FOOD_PACK = 'Упаковка с едой';
    const MEDPACK = 'Аптечка';
    const KNIFE = 'Нож';
    const SHORT_SWORD = 'Короткий меч';
    const STASIS_BOMB = 'Стазис-бомба';
    const LEAN_KILLER_CAN = 'Канистра с истребителем лиан';

    const WEIGHTS = [
        self::AEROCAR_SCAT => 0,
        self::CYBORG_PARTS => 0,
        self::MINI_GLOSY => 0,
    ];

    const TYPE_FIREARM = 'firearm';

    const TYPES = [
        self::GUN => self::TYPE_FIREARM,
        self::RIFLE => self::TYPE_FIREARM,
    ];
}