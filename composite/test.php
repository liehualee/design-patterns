<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/9/28
 * Time: 下午9:59
 */

namespace composite;

require_once './AutoLoader.php';

$root = new Composite('root');
$root->add(new Leaf('Leaf A'));
$root->add(new Leaf('Leaf B'));

$composite = new Composite('Composite X');
$composite->add(new Leaf('Leaf XA'));
$composite->add(new Leaf('Leaf XB'));

$root->add($composite);

$composite2 = new Composite('Composite Y');
$composite2->add(new Leaf('Leaf YA'));
$composite2->add(new Leaf('Leaf YB'));

$root->add($composite2);

$root->add(new Leaf('Leaf C'));

$leaf = new Leaf('Leaf D');
$root->add($leaf);
$root->remove($leaf);

$root->display(1);

