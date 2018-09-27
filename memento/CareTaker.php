<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/9/27
 * Time: 上午7:52
 */

namespace memento;

/**
 * Class CareTaker
 * @package memento
 */
class CareTaker
{
    private $memento;

    /**
     * @return mixed
     */
    public function getMemento()
    {
        return $this->memento;
    }

    /**
     * @param mixed $memento
     */
    public function setMemento($memento): void
    {
        $this->memento = $memento;
    }
}