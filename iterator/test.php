<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/9/28
 * Time: 下午9:59
 */

namespace iterator;

require_once './AutoLoader.php';

$a = new ConcreteAggregate();
$a->setItem('小王');
$a->setItem('小李');
$a->setItem('小明');

$i = new ConcreteIterator($a);
$item = $i->first();
while (! $i->isDone()) {
    echo $i->currentItem() . '请买车票！' . PHP_EOL;
    $i->next();
}

