<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/9/5
 * Time: 下午9:17
 */

namespace decorator;


class Shoes extends Finery
{
    public function show()
    {
        echo '鞋子 ';
        parent::show();
    }
}