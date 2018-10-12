<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/10/12
 * Time: 下午9:59
 */

namespace visitor;

require_once './AutoLoader.php';

$o = new ObjectStructure();
$o->attach(new ConcreteElementA());
$o->attach(new ConcreteElementB());

$v1 = new ConcreteVisitor1();
$v2 = new ConcreteVisitor2();

$o->accept($v1);
$o->accept($v2);
