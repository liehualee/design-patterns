<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/9/26
 * Time: 上午8:01
 */

namespace state;


class AfternoonState extends State
{

    public function WriteProgram(Work $w)
    {
        if ($w->getHour() < 17) {
            echo '当前时间：' . $w->getHour() . '点 下午状态还不错，继续努力' . PHP_EOL;
        } else {
            $w->setState(new EveningState());
            $w->writeProgram();
        }
    }
}