<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/9/4
 * Time: 下午9:51
 */

namespace single_factory;


class OperatorMul extends Operator
{

    public function getResult()
    {
        return $this->getNumberOne() * $this->getNumberTwo();
    }
}