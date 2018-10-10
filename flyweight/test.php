<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/10/10
 * Time: 下午9:59
 */

namespace flyweight;

require_once './AutoLoader.php';

$number = 22;

$factory = new FlyweightFactory();

$fx = $factory->getFlyweight('X');
$fx->operation(--$number);

$fy = $factory->getFlyweight('Y');
$fy->operation(--$number);

$fz = $factory->getFlyweight('Z');
$fz->operation(--$number);

$fz1 = $factory->getFlyweight('Z');
$fz1->operation(--$number);

$uf = new UnsharedConcreteFlyweight();
$uf->operation(--$number);
