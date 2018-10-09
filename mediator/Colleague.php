<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/10/9
 * Time: 上午7:51
 */

namespace mediator;


abstract class Colleague
{
    protected $mediator;

    public function __construct(Mediator $mediator)
    {
        $this->mediator = $mediator;
    }
}