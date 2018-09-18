<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/9/18
 * Time: 上午7:54
 */

namespace facade;


class Facade
{
    private $one;
    private $two;
    private $three;

    public function __construct()
    {
        $this->one = new SubSystemOne();
        $this->two = new SubSystemTwo();
        $this->three = new SubSystemThree();
    }

    public function methodA()
    {
        $this->one->methodOne();
        $this->two->methodTwo();
    }

    public function methodB()
    {
        $this->one->methodOne();
        $this->two->methodTwo();
        $this->three->methodThree();
    }
}