<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/9/28
 * Time: 上午8:16
 */

namespace iterator;


class ConcreteAggregate extends Aggregate
{
    private $items = [];

    public function createIterator()
    {
        return new ConcreteIterator($this);
    }

    public function count()
    {
        return count($this->items);
    }

    public function setItem($item)
    {
        array_push($this->items, $item);
    }

    public function getItem($index)
    {
        return $this->items[$index];
    }
}