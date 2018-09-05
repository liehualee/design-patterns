<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/9/4
 * Time: 下午9:59
 */

namespace proxy;

require_once './AutoLoader.php';

$girl = new Girl('小花');
$proxy = new Proxy($girl);
$proxy->giveFlowers();
