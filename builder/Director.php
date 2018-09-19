<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/9/19
 * Time: 上午7:56
 */

namespace builder;


class Director
{
    public function construct(Builder $builder)
    {
        $builder->buildPartA();
        $builder->buildPartB();
    }
}