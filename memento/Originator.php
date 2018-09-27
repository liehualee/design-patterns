<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/9/27
 * Time: 上午7:47
 */

namespace memento;

/**
 * Class Originator
 * @package memento
 */
class Originator
{
    private $state;

    public function createMemento()
    {
        return new Memento($this->state);
    }

    public function setMemento(Memento $memento)
    {
        $this->state = $memento->getState();
    }

    public function show()
    {
        echo 'state=' . $this->state . PHP_EOL;
    }

    /**
     * @param mixed $state
     */
    public function setState($state): void
    {
        $this->state = $state;
    }
}