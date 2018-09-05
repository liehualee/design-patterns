<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/9/4
 * Time: 下午9:39
 */

namespace single_factory;

class Operator
{
    private $numberOne = 0;
    private $numberTwo = 0;

    /**
     * @return int
     */
    public function getNumberOne()
    {
        return $this->numberOne;
    }

    /**
     * @param int $numberOne
     */
    public function setNumberOne($numberOne)
    {
        $this->numberOne = $numberOne;
    }

    /**
     * @return int
     */
    public function getNumberTwo()
    {
        return $this->numberTwo;
    }

    /**
     * @param int $numberTwo
     */
    public function setNumberTwo($numberTwo)
    {
        $this->numberTwo = $numberTwo;
    }

    public function getResult()
    {
        return 0;
    }
}