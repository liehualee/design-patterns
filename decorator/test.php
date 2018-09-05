<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/9/4
 * Time: 下午9:59
 */

namespace decorator;

require_once './AutoLoader.php';

$person = new Person('小王');
$trousers = new BigTrousers();
$shoes = new Shoes();
$suit = new Suit();

$trousers->decorate($person);
$shoes->decorate($trousers);
$suit->decorate($shoes);
$suit->show();

