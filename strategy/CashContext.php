<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/9/5
 * Time: 下午5:14
 */

namespace strategy;


class CashContext
{
    private $superCash;

    public function __construct(int $type)
    {
        switch ($type) {
            case CashCode::NORMAL:
                $this->superCash = new CashNormal();
                break;
            case CashCode::REBATE:
                $this->superCash = new CashRebate('0.8');
                break;
            case CashCode::RETURN:
                $this->superCash = new CashReturn('30', '10');
                break;
            default:
                $this->superCash = new CashNormal();
        }
    }

    public function getResult(float $money): float
    {
        return $this->superCash->acceptCash($money);
    }
}