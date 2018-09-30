<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/9/30
 * Time: 上午7:49
 */

namespace command;


class ConcreteCommand extends Command
{
    private $name;

    public function __construct(Receiver $receiver, string $name)
    {
        parent::__construct($receiver);
        $this->name = $name;
    }

    public function execute()
    {
        echo '命令' . $this->name . ':';
        $this->receiver->action();
    }
}