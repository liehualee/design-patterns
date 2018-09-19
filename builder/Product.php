<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/9/19
 * Time: 上午7:50
 */

namespace builder;


class Product
{
    private $parts = [];

    public function add(string $part)
    {
        array_push($this->parts, $part);
    }

    public function show()
    {
        echo PHP_EOL . '产品 创建----' . PHP_EOL;

        foreach ($this->parts as $part) {
            echo $part . PHP_EOL;
        }
    }
}