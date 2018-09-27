<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/9/27
 * Time: 上午7:19
 */

namespace adapter;

/**
 * 需要适配的类
 * Class Adaptee
 * @package adapter
 */
class Adaptee
{
    public function specificRequest()
    {
        echo '特殊请求！' . PHP_EOL;
    }
}