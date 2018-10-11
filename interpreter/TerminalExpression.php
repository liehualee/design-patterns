<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/10/11
 * Time: 上午7:39
 */

namespace interpreter;


class TerminalExpression extends AbstractExpression
{

    protected function execute(string $key, string $value): string
    {
        return '终结符解释器:' . $key . $value . PHP_EOL;
    }
}