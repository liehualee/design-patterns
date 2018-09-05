<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/9/5
 * Time: 下午5:08
 */

namespace strategy;


class CashReturn extends SuperCash
{
    private $moneyCondition;
    private $moneyReturn;

    public function __construct(string $moneyCondition, string $moneyReturn)
    {
        $this->moneyCondition = floatval($moneyCondition);
        $this->moneyReturn = floatval($moneyReturn);
    }

    public function acceptCash(float $money): float
    {
        $result = $money;

        if ($money >= $this->moneyCondition) {
            $result = $money - floor($money / $this->moneyCondition) * $this->moneyReturn;
        }

        return $result;
    }

    /**
     * @return mixed
     */
    public function getMoneyCondition()
    {
        return $this->moneyCondition;
    }

    /**
     * @param mixed $moneyCondition
     */
    public function setMoneyCondition($moneyCondition): void
    {
        $this->moneyCondition = $moneyCondition;
    }

    /**
     * @return mixed
     */
    public function getMoneyReturn()
    {
        return $this->moneyReturn;
    }

    /**
     * @param mixed $moneyReturn
     */
    public function setMoneyReturn($moneyReturn): void
    {
        $this->moneyReturn = $moneyReturn;
    }
}