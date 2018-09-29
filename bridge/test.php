<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/9/29
 * Time: 下午9:59
 */

namespace bridge;

require_once './AutoLoader.php';

$ab = new RefinedAbstraction();

$ab->setImplementor(new ConcreteImplementorA());
$ab->operator();

$ab->setImplementor(new ConcreteImplementorB());
$ab->operator();
