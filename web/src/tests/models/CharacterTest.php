<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\tests\models;


use app\library\CharactersLibrary;
use app\library\ItemsLibrary;
use app\models\Character;
use app\tests\UnitTestCase;

class CharacterTest extends UnitTestCase
{
    /**
     * @var Character
     */
    private $character;

    public function setUp()
    {
        parent::setUp();

        $this->character = new Character(CharactersLibrary::CHARACTERS[CharactersLibrary::EXPLORER]);
    }

    public function testAddToInventory()
    {
        $this->character->addToInventory(ItemsLibrary::GUN_AMMO, 1);
        $this->character->addToInventory(ItemsLibrary::GUN_AMMO, 1);

        $this->assertEquals(2, $this->character->inventory[ItemsLibrary::GUN_AMMO]);
    }

    public function testRemoveFromInventory()
    {
        $this->character->addToInventory(ItemsLibrary::GUN);
        $this->character->removeFromInventory(ItemsLibrary::GUN);

        $this->assertArrayNotHasKey(ItemsLibrary::GUN, $this->character->inventory);
    }

    public function testSetInventoryItem()
    {
        $this->character->addToInventory(ItemsLibrary::GUN_AMMO, 1);
        $this->character->setInventoryItem(ItemsLibrary::GUN_AMMO, 2);

        $this->assertEquals(2, $this->character->inventory[ItemsLibrary::GUN_AMMO]);
    }
}