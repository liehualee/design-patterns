<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/9/5
 * Time: 下午3:00
 */

namespace factory_method;


class AddFactory implements IFactory
{

    public function createOperator(): Operator
    {
        return new OperatorAdd();
    }
}