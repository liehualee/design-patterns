<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/10/11
 * Time: 下午9:59
 */

namespace interpreter;

require_once './AutoLoader.php';

$context = new Context();
$context->setInput('A 2 B 3 C 5 D 1 E 4');

while ($context->getInput()) {
    $key = substr($context->getInput(), 0, 1);
    switch ($key) {
        case 'A':
        case 'B':
        case 'C':
        case 'D':
            $expression = new NonTerminalExpression();
            break;
        case 'E':
            $expression = new TerminalExpression();
            break;
        default:
            $expression = new NonTerminalExpression();
    }
    $expression->interpret($context);
}

echo $context->getOutput();



