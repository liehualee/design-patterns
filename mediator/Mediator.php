<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/10/9
 * Time: 上午7:50
 */

namespace mediator;


abstract class Mediator
{
    public abstract function send(string $message, Colleague $colleague);
}