<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/9/26
 * Time: 上午7:56
 */

namespace state;


class Work
{
    private $current;
    private $hour;
    private $finish = false;

    public function __construct()
    {
        $this->current = new ForenoonState();
    }

    public function writeProgram()
    {
        $this->current->WriteProgram($this);
    }

    /**
     * @return State
     */
    public function getState(): State
    {
        return $this->current;
    }

    /**
     * @param State $state
     */
    public function setState(State $state): void
    {
        $this->current = $state;
    }


    /**
     * @return mixed
     */
    public function getHour()
    {
        return $this->hour;
    }

    /**
     * @param mixed $hour
     */
    public function setHour($hour): void
    {
        $this->hour = $hour;
    }

    /**
     * @return bool
     */
    public function isFinish(): bool
    {
        return $this->finish;
    }

    /**
     * @param bool $finish
     */
    public function setFinish(bool $finish): void
    {
        $this->finish = $finish;
    }
}