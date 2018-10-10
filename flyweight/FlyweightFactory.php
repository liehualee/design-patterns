<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/10/10
 * Time: 上午7:49
 */

namespace flyweight;


class FlyweightFactory
{
    private $flyweights;

    public function getFlyweight(string $key) : FlyWeight
    {
        if (! isset($this->flyweights[$key])) {
            echo 11;
            $this->flyweights[$key] = new ConcreteFlyWeight($key);
        }
echo 22;
        return $this->flyweights[$key];
    }
}