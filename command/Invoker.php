<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/9/30
 * Time: 上午7:50
 */

namespace command;


class Invoker
{
    /**
     * @var Command[]
     */
    private $commands = [];

    /**
     * @param Command $command
     */
    public function setCommand($command): void
    {
        array_push($this->commands, $command);
    }

    public function removeCommand($command)
    {
        $offset = array_search($command, $this->commands);

        if ($offset !== false) {
            unset($this->commands[$offset]);
        }
    }

    public function executeCommands()
    {
        foreach ($this->commands as $command) {
            $command->execute();
        }
    }
}