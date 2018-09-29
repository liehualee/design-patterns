<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/9/29
 * Time: 上午7:50
 */

namespace bridge;


class ConcreteImplementorA extends Implementor
{

    public function operation()
    {
        echo '具体实现A的方法执行' . PHP_EOL;
    }
}