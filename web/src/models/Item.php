<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\models;


use app\library\ItemsLibrary;

class Item
{
    public $name;
    public $count;
    public $weight;
    public $price;

    public function __construct($data = [])
    {
        $this->name = $data['name'] ?? '';
        $this->count = $data['count'] ?? 0;
        $this->price = $data['price'] ?? 0;
        $this->weight = ItemsLibrary::WEIGHTS[$data['name']] ?? 1;
    }

    public function toArray()
    {
        return [
            'name' => $this->name,
            'count' => $this->count,
            'weight' => $this->weight,
            'price' => $this->price,
        ];
    }

    public function getWeight()
    {
        return $this->weight * $this->count;
    }
}