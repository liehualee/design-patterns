<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/10/10
 * Time: 上午7:48
 */

namespace flyweight;


class UnsharedConcreteFlyweight extends FlyWeight
{

    public function operation(int $number)
    {
        echo '不共享Flyweight：' . $number . PHP_EOL;
    }
}