<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/9/4
 * Time: 下午9:52
 */

namespace single_factory;


class OperatorDiv extends Operator
{

    public function getResult()
    {
        if ($this->getNumberTwo() === 0) {
            throw new \InvalidArgumentException('除数不能为0！');
        }

        return $this->getNumberOne() / $this->getNumberTwo();
    }
}