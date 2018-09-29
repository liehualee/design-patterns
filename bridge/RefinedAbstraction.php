<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/9/29
 * Time: 上午7:52
 */

namespace bridge;


class RefinedAbstraction extends Abstraction
{

    public function operator()
    {
        $this->implementor->operation();
    }
}