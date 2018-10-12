<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/10/12
 * Time: 上午7:41
 */

namespace visitor;


class ConcreteElementB extends Element
{

    public function accept(Visitor $visitor)
    {
        $visitor->visitConcreteElementB($this);
    }

    public function operationB()
    {
        echo 'operationB' . PHP_EOL;
    }
}