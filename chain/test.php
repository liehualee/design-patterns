<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/10/8
 * Time: 下午9:59
 */

namespace chain;

require_once './AutoLoader.php';

$handle1 = new ConcreteHandle1();
$handle2 = new ConcreteHandle2();
$handle3 = new ConcreteHandle3();
$handle1->setHandle($handle2);
$handle2->setHandle($handle3);

$requests = [2, 5, 14, 22, 18, 3, 27, 20];
foreach ($requests as $request) {
    $handle1->handleRequest($request);
}