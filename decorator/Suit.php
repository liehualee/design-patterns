<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/9/5
 * Time: 下午9:18
 */

namespace decorator;


class Suit extends Finery
{
    public function show()
    {
        echo '西装 ';
        parent::show();
    }
}