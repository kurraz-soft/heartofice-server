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
        $this->character->addToInventory(ItemsLibrary::GUN, 2);

        $this->assertArrayHasKey(ItemsLibrary::GUN, $this->character->inventory);
    }

    public function testRemoveFromInventory()
    {
        $this->character->addToInventory(ItemsLibrary::GUN);
        $this->character->removeFromInventory(ItemsLibrary::GUN);

        $this->assertArrayNotHasKey(ItemsLibrary::GUN, $this->character->inventory);
    }

    public function testDecreaseInventoryItemCnt()
    {
        $this->character->addToInventory(ItemsLibrary::GUN, 6);

        $this->character->decreaseInventoryItemCnt(ItemsLibrary::GUN, 1);

        $this->assertEquals(5, $this->character->inventory[ItemsLibrary::GUN]->count);
    }
}