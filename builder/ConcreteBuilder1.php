<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/9/19
 * Time: 上午7:53
 */

namespace builder;


class ConcreteBuilder1 extends Builder
{
    private $product;

    public function __construct()
    {
        $this->product = new Product();
    }

    public function buildPartA()
    {
        $this->product->add('部件A');
    }

    public function buildPartB()
    {
        $this->product->add('部件B');
    }

    public function getResult(): Product
    {
        return $this->product;
    }
}