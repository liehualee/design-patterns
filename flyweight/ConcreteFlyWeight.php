<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/10/10
 * Time: 上午7:47
 */

namespace flyweight;


class ConcreteFlyWeight extends FlyWeight
{
    /**
     * 外部状态
     * @var string
     */
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function operation(int $number)
    {
        echo $this->name . '共享Flyweight：' . $number . PHP_EOL;
    }
}