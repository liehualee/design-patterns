<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/9/26
 * Time: 上午8:02
 */

namespace state;


class EveningState extends State
{

    public function WriteProgram(Work $w)
    {
        if ($w->isFinish()) {
            $w->setState(new RestState());
            $w->writeProgram();
        } else {
            if ($w->getHour() < 21) {
                echo '当前时间：' . $w->getHour() . '点 加班哦，疲累至极' . PHP_EOL;
            } else {
                $w->setState(new SleepingState());
                $w->writeProgram();
            }
        }
    }
}