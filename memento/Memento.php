<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/9/27
 * Time: 上午7:48
 */

namespace memento;

/**
 * Class Memento
 * @package memento
 */
class Memento
{
    private $state;

    public function __construct($state)
    {
        $this->state = $state;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }
}