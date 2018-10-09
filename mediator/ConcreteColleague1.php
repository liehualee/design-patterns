<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/10/9
 * Time: 上午7:53
 */

namespace mediator;


class ConcreteColleague1 extends Colleague
{
    public function send(string $message)
    {
        $this->mediator->send($message, $this);
    }

    public function notify(string $message)
    {
        echo '同事1得到信息：' . $message . PHP_EOL;
    }
}