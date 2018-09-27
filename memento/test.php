<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/9/27
 * Time: 下午9:59
 */

namespace memento;

require_once './AutoLoader.php';

$o = new Originator();
$o->setState('On');
$o->show();

$careTaker = new CareTaker();
$careTaker->setMemento($o->createMemento());

$o->setState('Off');
$o->show();

$o->setMemento($careTaker->getMemento());
$o->show();
