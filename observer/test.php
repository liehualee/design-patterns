<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/9/20
 * Time: 下午9:59
 */

namespace observer;

require_once './AutoLoader.php';

$subject = new ConcreteSubject();

$subject->attach(new ConcreteObserver('a', $subject));
$subject->attach(new ConcreteObserver('b', $subject));
$subject->attach(new ConcreteObserver('c', $subject));

$subject->setSubjectStatus('ABC');
$subject->notify();


