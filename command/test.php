<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/9/30
 * Time: 下午9:59
 */

namespace command;

require_once './AutoLoader.php';

$receiver = new Receiver();
$commandA = new ConcreteCommand($receiver, 'A');
$commandB = new ConcreteCommand($receiver, 'B');
$invoker = new Invoker();

$invoker->setCommand($commandA);
$invoker->setCommand($commandB);
$invoker->removeCommand($commandA);
$invoker->executeCommands();