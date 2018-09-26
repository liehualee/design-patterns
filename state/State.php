<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/9/26
 * Time: 上午7:55
 */

namespace state;


abstract class State
{
    public abstract function WriteProgram(Work $w);
}