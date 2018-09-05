<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/9/4
 * Time: 下午9:59
 */

namespace strategy;

require_once './AutoLoader.php';

$money = 100;
$result = (new CashContext(CashCode::RETURN))->getResult($money);
echo $result;
