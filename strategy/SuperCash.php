<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/9/5
 * Time: 下午5:04
 */

namespace strategy;

abstract class SuperCash
{
    public abstract function acceptCash(float $money): float ;
}