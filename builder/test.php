<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/9/4
 * Time: 下午9:59
 */

namespace builder;

require_once './AutoLoader.php';

$director = new Director();
$builder1 = new ConcreteBuilder1();
$builder2 = new ConcreteBuilder2();

$director->construct($builder1);
$product1 = $builder1->getResult();
$product1->show();

$director->construct($builder2);
$product2 = $builder2->getResult();
$product2->show();
