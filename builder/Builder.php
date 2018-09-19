<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/9/19
 * Time: 上午7:49
 */

namespace builder;


abstract class Builder
{
    public abstract function buildPartA();
    public abstract function buildPartB();
    public abstract function getResult(): Product;
}