<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/9/26
 * Time: 上午8:02
 */

namespace state;


class SleepingState extends State
{

    public function WriteProgram(Work $w)
    {
        echo '当前时间：' . $w->getHour() . '点 睡着了。' . PHP_EOL;
    }
}