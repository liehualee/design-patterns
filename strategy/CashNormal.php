<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/9/5
 * Time: 下午5:05
 */

namespace strategy;


class CashNormal extends SuperCash
{

    public function acceptCash(float $money): float
    {
        return $money;
    }
}