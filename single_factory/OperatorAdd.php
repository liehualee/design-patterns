<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/9/4
 * Time: 下午9:47
 */

namespace single_factory;


class OperatorAdd extends Operator
{

    public function getResult()
    {
        return $this->getNumberOne() + $this->getNumberTwo();
    }
}