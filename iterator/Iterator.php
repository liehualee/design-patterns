<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/9/28
 * Time: 上午8:12
 */

namespace iterator;


abstract class Iterator
{
    public abstract function first();
    public abstract function next();
    public abstract function isDone();
    public abstract function currentItem();
}