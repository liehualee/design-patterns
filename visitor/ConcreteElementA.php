<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/10/12
 * Time: 上午7:41
 */

namespace visitor;


class ConcreteElementA extends Element
{

    public function accept(Visitor $visitor)
    {
        $visitor->visitConcreteElementA($this);
    }

    public function operationA()
    {
        echo 'operationA' . PHP_EOL;
    }
}