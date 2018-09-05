<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/9/4
 * Time: 下午9:59
 */

namespace factory_method;

require_once './AutoLoader.php';

$factory = new AddFactory();
$operator = $factory->createOperator();
$operator->setNumberOne(3);
$operator->setNumberTwo(5);
$result = $operator->getResult();
echo $result;
