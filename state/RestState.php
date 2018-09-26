<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/9/26
 * Time: 上午8:03
 */

namespace state;


class RestState extends State
{

    public function WriteProgram(Work $w)
    {
        echo '当前时间：' . $w->getHour() . '点 下班回家了' . PHP_EOL;
    }
}