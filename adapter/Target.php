<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/9/27
 * Time: 上午7:17
 */

namespace adapter;

/**
 * 目标接口，客户期望的接口
 * Class Target
 * @package adapter
 */
abstract class Target
{
    public abstract function request();
}