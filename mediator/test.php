<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/10/9
 * Time: 下午9:59
 */

namespace mediator;

require_once './AutoLoader.php';

$m = new ConcreteMediator();

$c1 = new ConcreteColleague1($m);
$c2 = new ConcreteColleague2($m);

$m->setColleague1($c1);
$m->setColleague2($c2);

$c1->send('吃过饭了吗？');
$c2->send('没有呢，你打算请客？');
