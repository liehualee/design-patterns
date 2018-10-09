<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/10/9
 * Time: 上午7:56
 */

namespace mediator;


class ConcreteMediator extends Mediator
{
    /**
     * @var ConcreteColleague1
     */
    private $colleague1;
    /**
     * @var ConcreteColleague2
     */
    private $colleague2;

    public function send(string $message, Colleague $colleague)
    {
        if ($colleague === $this->colleague1) {
            $this->colleague2->notify($message);
        } else {
            $this->colleague1->notify($message);
        }
    }

    /**
     * @param ConcreteColleague1 $colleague1
     */
    public function setColleague1(ConcreteColleague1 $colleague1): void
    {
        $this->colleague1 = $colleague1;
    }

    /**
     * @param ConcreteColleague2 $colleague2
     */
    public function setColleague2(ConcreteColleague2 $colleague2): void
    {
        $this->colleague2 = $colleague2;
    }
}