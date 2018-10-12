<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/10/12
 * Time: 上午7:48
 */

namespace visitor;


class ConcreteVisitor2 extends Visitor
{

    public function visitConcreteElementA(ConcreteElementA $concreteElementA)
    {
        echo sprintf("%s被%s访问\n", ConcreteElementA::class, ConcreteVisitor2::class);
    }

    public function visitConcreteElementB(ConcreteElementB $concreteElementB)
    {
        echo sprintf("%s被%s访问\n", ConcreteElementB::class, ConcreteVisitor2::class);
    }
}