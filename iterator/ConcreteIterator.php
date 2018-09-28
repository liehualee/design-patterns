<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/9/28
 * Time: 上午8:14
 */

namespace iterator;


class ConcreteIterator extends Iterator
{
    private $aggregate;
    private $current = 0;

    public function __construct(ConcreteAggregate $aggregate)
    {
        $this->aggregate = $aggregate;
    }

    public function first()
    {
        return $this->aggregate->getItem(0);
    }

    public function next()
    {
        $result = null;
        ++ $this->current;

        if ($this->current < $this->aggregate->count()) {
            $result = $this->aggregate->getItem($this->current);
        }

        return $result;
    }

    public function isDone()
    {
        return $this->current >= $this->aggregate->count() ? true : false;
    }

    public function currentItem()
    {
        return $this->aggregate->getItem($this->current);
    }
}