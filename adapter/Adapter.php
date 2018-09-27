<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/9/27
 * Time: 上午7:20
 */

namespace adapter;

/**
 * 适配器，把源接口转换为目标接口
 * Class Adapter
 * @package adapter
 */
class Adapter extends Target
{
    private $adaptee;

    public function __construct()
    {
        $this->adaptee = new Adaptee();
    }

    public function request()
    {
        $this->adaptee->specificRequest();
    }
}