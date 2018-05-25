<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\library;


class CharactersLibrary
{
    const EXPLORER = 'Исследователь';
    const SPY = 'Шпион';
    const BOUNTY_HUNTER = 'Охотник за головами';
    const TRADER = 'Торговец';
    const SEER = 'Провидец';
    const MUTANT = 'Мутант';
    const SCIENTIST = 'Ученый';

    const CHARACTERS = [
        self::EXPLORER =>
        [
            'class' => self::EXPLORER,
            'description' => 'В то время, как другие, возможно, оплакивают крах цивилизации, вам открываются новые возможности и тайны мира.',
            'health' => 11,
            'healthMax' => 11,
            'skills' => [
                SkillsLibrary::MELEE_FIGHT,
                SkillsLibrary::KNOWLEDGE,
                SkillsLibrary::STREET_KNOWLEDGE,
                SkillsLibrary::SURVIVAL,
            ],
            'inventory' => [

            ],
            'money' => 20,
        ],
        self::SPY =>
        [
            'class' => self::SPY,
            'description' => 'Даже когда мир мучительно умирает, правительства продолжают делить остатки власти и богатства. Вы крадете секреты и продаете их тем, кто больше заплатит.',
            'health' => 10,
            'healthMax' => 10,
            'skills' => [
                SkillsLibrary::AGILITY,
                SkillsLibrary::CYBERNETIC,
                SkillsLibrary::STEALING,
                SkillsLibrary::STREET_KNOWLEDGE,
            ],
            'inventory' => [

            ],
            'money' => 30,
        ],
        self::BOUNTY_HUNTER =>
        [
            'class' => self::BOUNTY_HUNTER,
            'description' => 'Сейчас трудные времена, сильный диктует законы слабым.',
            'health' => 10,
            'healthMax' => 10,
            'skills' => [
                SkillsLibrary::TRICKERY,
                SkillsLibrary::PILOTING,
                SkillsLibrary::SHOOTING,
                SkillsLibrary::STREET_KNOWLEDGE,
            ],
            'inventory' => [
                'items' => [
                    [
                        'name' => ItemsLibrary::GUN,
                        'count' => 6,
                    ],
                ],
            ],
            'money' => 40,
        ],
        self::TRADER =>
        [
            'class' => self::TRADER,
            'description' => 'Немногие решаются пересекать ледяные пустоши между городами, поэтому смелый путешественник может получить хорошую прибыль.',
            'health' => 10,
            'healthMax' => 10,
            'skills' => [
                SkillsLibrary::PSY,
                SkillsLibrary::KNOWLEDGE,
                SkillsLibrary::SHOOTING,
                SkillsLibrary::STREET_KNOWLEDGE,
            ],
            'inventory' => [
                'items' => [
                    [
                        'name' => ItemsLibrary::GUN,
                        'count' => 6,
                    ],
                    [
                        'name' => ItemsLibrary::PSY_FOCUSER,
                        'count' => 1,
                    ],
                ],
            ],
            'money' => 35,
        ],
        self::SEER =>
        [
            'class' => self::SEER,
            'description' => 'Ты одарен особым взглядом, поэтому тебе известно, что человечество обречено, если не предпринять шагов во спасение.',
            'health' => 10,
            'healthMax' => 10,
            'skills' => [
                SkillsLibrary::MELEE_FIGHT,
                SkillsLibrary::TRICKERY,
                SkillsLibrary::PSY,
                SkillsLibrary::PARADOX_CONTROL,
            ],
            'inventory' => [
                'items' => [
                    [
                        'name' => ItemsLibrary::PSY_FOCUSER,
                        'count' => 1,
                    ],
                ]
            ],
            'money' => 30,
        ],
        self::MUTANT =>
        [
            'class' => self::MUTANT,
            'description' => 'Будучи с рождения одаренным странными способностями, вы не являетесь человеком в полном смысле этого слова. Другие наверняка убьют вас, если узнают ваш секрет.',
            'health' => 10,
            'healthMax' => 10,
            'skills' => [
                SkillsLibrary::AGILITY,
                SkillsLibrary::TRICKERY,
                SkillsLibrary::PARADOX_CONTROL,
                SkillsLibrary::STEALING,
            ],
            'inventory' => [
                'items' => [
                    [
                        'name' => ItemsLibrary::PSY_FOCUSER,
                        'count' => 1,
                    ],
                ]
            ],
            'money' => 30,
        ],
        self::SCIENTIST =>
        [
            'class' => self::SCIENTIST,
            'description' => 'Большинство ничего не понимает в машинах, созданных предками, но вы усвоили, что знание — это сила.',
            'health' => 10,
            'healthMax' => 10,
            'skills' => [
                SkillsLibrary::CYBERNETIC,
                SkillsLibrary::KNOWLEDGE,
                SkillsLibrary::PILOTING,
                SkillsLibrary::SURVIVAL,
            ],
            'inventory' => [
            ],
            'money' => 30,
        ],
    ];

    static public function getCharacterTemplate($class)
    {
        return self::CHARACTERS[$class];
    }
}