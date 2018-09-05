<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/9/5
 * Time: 下午9:16
 */

namespace decorator;


class BigTrousers extends Finery
{
    public function show()
    {
        echo '裤子 ';
        parent::show();
    }
}