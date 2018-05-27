<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\tests\models;


use app\library\CharactersLibrary;
use app\library\ItemsLibrary;
use app\models\Inventory;
use app\tests\UnitTestCase;

class InventoryTest extends UnitTestCase
{
    public function testFromArray()
    {
        $inv = Inventory::fromArray(CharactersLibrary::CHARACTERS[CharactersLibrary::BOUNTY_HUNTER]['inventory'],8);

        $this->assertEquals([
            'items' => [
                [
                    "name" => ItemsLibrary::GUN,
                    "count" => 6,
                    "weight" => 1,
                    "price" => 0,
                    "type" => 'firearm',
                ],
            ],
            'maxWeight' => 8,
            'takeLimit' => 0,
        ], $inv->toArray());
    }

    public function testGetWeightSum()
    {
        $inv = new Inventory();

        $inv->add(ItemsLibrary::GUN, 6);
        $inv->add(ItemsLibrary::GUN, 2);

        $this->assertEquals(2, $inv->getWeightSum());
    }
}