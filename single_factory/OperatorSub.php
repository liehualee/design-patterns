<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/9/4
 * Time: 下午9:49
 */

namespace single_factory;


class OperatorSub extends Operator
{

    public function getResult()
    {
        return $this->getNumberOne() - $this->getNumberTwo();
    }
}