<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/10/11
 * Time: 上午7:33
 */

namespace interpreter;


abstract class AbstractExpression
{
    public function interpret(Context $context)
    {
        if (strlen($context->getInput()) === 0) {
            return;
        }

        $key = substr($context->getInput(), 0, 1);
        $value = substr($context->getInput(), 2, 1);
        $context->setInput(substr($context->getInput(), 4));
        $output = $this->execute($key, $value);
        $context->setOutput($context->getOutput() . $output);
    }

    protected abstract function execute(string $key, string $value): string;
}