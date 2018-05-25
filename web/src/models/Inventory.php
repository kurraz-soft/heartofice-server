<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\models;


class Inventory implements \ArrayAccess
{
    public $maxWeight = 0;

    /**
     * @var Item[]
     */
    public $items = [];

    public function __construct($maxWeight = 0)
    {
        $this->maxWeight = $maxWeight;
    }

    /**
     * @param $data
     * @param int $maxWeight
     * @return Inventory
     * @throws \Exception
     */
    static public function fromArray($data, $maxWeight = 0)
    {
        $inv = new Inventory($maxWeight);

        if(isset($data['items']))
            foreach ($data['items'] as $item)
            {
                $inv->add($item['name'], $item['count']);
            }

        return $inv;
    }

    public function offsetExists($offset)
    {
        return isset($this->items[$offset]);
    }

    public function offsetGet($offset)
    {
        return $this->items[$offset]->count;
    }

    public function offsetSet($offset, $value)
    {
        $this->items[$offset] = new Item([
            'name' => $offset,
            'count' => $value,
        ]);
    }

    public function offsetUnset($offset)
    {
        unset($this->items[$offset]);
    }

    /**
     * @param $item_name
     * @param int $cnt
     * @param int $price
     * @throws \Exception
     */
    public function add($item_name, $cnt = 1, $price = 0)
    {
        $item = new Item([
            'name' => $item_name,
            'count' => $cnt,
            'price' => $price,
        ]);
        $this->items[$item->name] = $item;

        if($this->maxWeight && $this->getWeightSum() > $this->maxWeight) throw new \Exception('Inventory capacity exceeded');
    }

    public function remove($item_name)
    {
        unset($this->items[$item_name]);
    }

    public function getWeightSum()
    {
        $sum = 0;
        foreach ($this->items as $item)
        {
            $sum += $item->weight * $item->count;
        }

        return $sum;
    }

    public function toArray()
    {
        $ret = [
            'items' => [],
            'maxWeight' => $this->maxWeight,
        ];

        foreach ($this->items as $item)
        {
            $ret['items'][] = $item->toArray();
        }

        return $ret;
    }
}