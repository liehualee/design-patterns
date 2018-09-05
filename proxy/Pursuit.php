<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/9/5
 * Time: 下午10:01
 */

namespace proxy;


class Pursuit implements IGiveGift
{
    private $girl;

    public function __construct(Girl $girl)
    {
        $this->girl = $girl;
    }

    public function giveDolls()
    {
        echo $this->girl->getName() . '送你洋娃娃';
    }

    public function giveFlowers()
    {
        echo $this->girl->getName() . '送你鲜花';
    }

    public function giveChocolate()
    {
        echo $this->girl->getName() . '送你巧克力';
    }
}