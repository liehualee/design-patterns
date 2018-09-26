<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/9/26
 * Time: 上午7:57
 */

namespace state;


class ForenoonState extends State
{

    public function WriteProgram(Work $w)
    {
        if ($w->getHour() < 12) {
            echo '当前时间：' . $w->getHour() . '点 上午工作，精神百倍' . PHP_EOL;
        } else {
            $w->setState(new NoonState());
            $w->writeProgram();
        }
    }
}