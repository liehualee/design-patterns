<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/9/5
 * Time: 下午2:58
 */

namespace factory_method;


interface IFactory
{
    public function createOperator(): Operator;
}