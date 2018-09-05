<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/9/5
 * Time: 下午10:04
 */

namespace proxy;


class Proxy implements IGiveGift
{
    private $pursuit;

    public function __construct(Girl $girl)
    {
        $this->pursuit = new Pursuit($girl);
    }

    public function giveDolls()
    {
        $this->pursuit->giveDolls();
    }

    public function giveFlowers()
    {
        $this->pursuit->giveFlowers();
    }

    public function giveChocolate()
    {
        $this->pursuit->giveChocolate();
    }
}