<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/9/5
 * Time: 下午5:06
 */

namespace strategy;

class CashRebate extends SuperCash
{
    private $moneyRebate = 1;

    public function __construct(string $moneyRebate)
    {
        $this->moneyRebate = floatval($moneyRebate);
    }

    public function acceptCash(float $money): float
    {
        return $money * $this->moneyRebate;
    }
}