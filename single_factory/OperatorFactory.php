<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/9/4
 * Time: 下午9:52
 */

namespace single_factory;


class OperatorFactory
{
    public static function createOperator(string $operator): Operator
    {
        switch ($operator)
        {
            case '+':
                $operator = new OperatorAdd();
                break;
            case '-':
                $operator = new OperatorSub();
                break;
            case '*':
                $operator = new OperatorMul();
                break;
            case '/':
                $operator = new OperatorDiv();
                break;
            default:
                $operator = new Operator();
        }

        return $operator;
    }
}