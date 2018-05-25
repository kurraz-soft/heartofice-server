<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\models;


class Character
{
    const INVENTORY_MAX_WEIGHT = 8;

    public $name;
    public $class;
    public $health;
    public $healthMax;
    public $skills;
    /**
     * @var Inventory
     */
    public $inventory;
    public $keywords;
    public $money;

    public function __construct($data = [])
    {
        $this->name = $data['name'] ?? '';
        $this->class = $data['class'] ?? '';
        $this->health = $data['health'] ?? 0;
        $this->healthMax = $data['healthMax'] ?? 0;
        $this->skills = $data['skills'] ?? [];
        //$this->inventory = $data['inventory'] ?? [];
        $this->inventory = Inventory::fromArray($data['inventory'] ?? [],self::INVENTORY_MAX_WEIGHT);
        $this->keywords = $data['keywords'] ?? [];
        $this->money = $data['money'] ?? 0;
    }

    public function toArray()
    {
        return [
            'name' => $this->name,
            'class' => $this->class,
            'health' => $this->health,
            'healthMax' => $this->healthMax,
            'skills' => $this->skills,
            'inventory' => $this->inventory->toArray(),
            'keywords' => $this->keywords,
            'money' => $this->money,
        ];
    }

    public function addToInventory($item, $cnt = 1)
    {
        $this->inventory->add($item, $cnt);
    }

    public function removeFromInventory($item)
    {
        unset($this->inventory[$item]);
    }

    public function decreaseInventoryItemCnt($item, $cnt = 1)
    {
        if(!isset($this->inventory[$item]) || $this->inventory[$item]->count < $cnt)
            throw new \Exception('Attempt to take more than inventory has');

        $this->inventory[$item]->count -= $cnt;
        //if($this->inventory[$item] == 0) unset($this->inventory[$item]);
    }

    public function hasItem($item)
    {
        return isset($this->inventory[$item]);
    }

    public function addKeyword($word)
    {
        if(!$this->hasKeyword($word))
            $this->keywords[] = $word;
    }

    public function removeKeyword($word)
    {
        if($this->hasKeyword($word))
            unset($this->keywords[array_search($word, $this->keywords)]);
    }

    public function hasKeyword($word)
    {
        return in_array($word, $this->keywords);
    }

    public function hasSkill($skill)
    {
        return in_array($skill, $this->skills);
    }

    public function addSkill($skill)
    {
        if(!$this->hasSkill($skill)) $this->skills[] = $skill;
    }

    public function addHealth($add)
    {
        $this->health = max(0, min($this->healthMax, $this->health + $add));
    }

    public function spendMoney($cost)
    {
        $this->money -= $cost;
    }
}