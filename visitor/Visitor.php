<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/10/12
 * Time: 上午7:38
 */

namespace visitor;


abstract class Visitor
{
    public abstract function visitConcreteElementA(ConcreteElementA $concreteElementA);
    public abstract function visitConcreteElementB(ConcreteElementB $concreteElementB);
}