<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/10/11
 * Time: 上午7:36
 */

namespace interpreter;


class Context
{
    /**
     * @var string
     */
    private $input = '';
    /**
     * @var string
     */
    private $output = '';

    /**
     * @return string
     */
    public function getInput()
    {
        return $this->input;
    }

    /**
     * @param string $input
     */
    public function setInput($input): void
    {
        $this->input = $input;
    }

    /**
     * @return string
     */
    public function getOutput(): string
    {
        return $this->output;
    }

    /**
     * @param string $output
     */
    public function setOutput(string $output): void
    {
        $this->output = $output;
    }
}