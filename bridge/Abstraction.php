<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/9/29
 * Time: 上午7:51
 */

namespace bridge;


abstract class Abstraction
{
    /**
     * @var Implementor
     */
    protected $implementor;

    public abstract function operator();

    /**
     * @param Implementor $implementor
     */
    public function setImplementor($implementor): void
    {
        $this->implementor = $implementor;
    }
}