<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/9/20
 * Time: 上午7:53
 */

namespace observer;


class ConcreteObserver implements Observer
{
    private $id;
    private $subject;

    public function __construct(string $id, ConcreteSubject $subject)
    {
        $this->id = $id;
        $this->subject = $subject;
    }

    public function getId()
    {
        return $this->id;
    }

    public function update()
    {
        echo sprintf('观察者%s的新状态是%s' . PHP_EOL, $this->id, $this->subject->getSubjectStatus());
    }
}