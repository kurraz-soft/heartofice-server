<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\models;


use app\library\ItemsLibrary;

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
        foreach ($this->items as $item)
        {
            if($item->name === $offset) return true;
        }

        return false;
    }

    public function offsetGet($offset)
    {
        $item_found = null;
        foreach ($this->items as $item)
        {
            if($item->name === $offset)
            {
                if($item_found === null || $item->count < $item_found->count)
                    $item_found = $item;
            }
        }

        return $item_found;
    }

    /**
     * @param mixed $offset
     * @param Item $value
     * @throws \Exception
     */
    public function offsetSet($offset, $value)
    {
        $item = $this[$offset];

        if($item) $item = $value;
        else $this->add($value->name, $value->count, $value->price);
    }

    public function offsetUnset($offset)
    {
        $item_found = null;
        foreach ($this->items as $k => $item)
        {
            if($item->name === $offset)
            {
                unset($this->items[$k]);
                break;
            }
        }
    }

    /**
     * @param $item_name
     * @param int $cnt
     * @param int $price
     * @param int $quantity
     * @throws \Exception
     */
    public function add($item_name, $cnt = 1, $price = 0, $quantity = 1)
    {
        for($i = 0; $i < $quantity; $i++)
        {
            $item = new Item([
                'name' => $item_name,
                'count' => $cnt,
                'price' => $price,
            ]);
            $this->items[] = $item;

            if($this->maxWeight && $this->getWeightSum() > $this->maxWeight) throw new \Exception('Inventory capacity exceeded');
        }
    }

    public function remove($item_name)
    {
        unset($this[$item_name]);
    }

    public function getWeightSum()
    {
        $sum = 0;
        foreach ($this->items as $item)
        {
            $sum += $item->weight;
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