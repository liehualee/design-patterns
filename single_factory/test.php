<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/9/4
 * Time: 下午9:59
 */

namespace single_factory;

require_once './AutoLoader.php';

$operator = OperatorFactory::createOperator(OperatorCode::DIV);
$operator->setNumberOne(3);
$operator->setNumberTwo(5);
$result = $operator->getResult();
echo $result;
