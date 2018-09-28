<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/9/28
 * Time: 上午8:14
 */

namespace iterator;


abstract class Aggregate
{
    public abstract function createIterator();
}