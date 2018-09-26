<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/9/26
 * Time: 上午8:01
 */

namespace state;


class NoonState extends State
{

    public function WriteProgram(Work $w)
    {
        if ($w->getHour() < 13) {
            echo '当前时间：' . $w->getHour() . '点 饿了，午饭：犯困 午休' . PHP_EOL;
        } else {
            $w->setState(new AfternoonState());
            $w->writeProgram();
        }
    }
}