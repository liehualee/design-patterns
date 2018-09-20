<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/9/20
 * Time: 上午7:42
 */

namespace observer;


interface Observer
{
    public function getId();
    public function update();
}