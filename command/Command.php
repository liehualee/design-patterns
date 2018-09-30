<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/9/30
 * Time: 上午7:45
 */

namespace command;


abstract class Command
{
    protected $receiver;

    public function __construct(Receiver $receiver)
    {
        $this->receiver = $receiver;
    }

    public abstract function execute();
}