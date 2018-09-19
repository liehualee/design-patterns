<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/9/19
 * Time: 上午7:53
 */

namespace builder;


class ConcreteBuilder2 extends Builder
{
    private $product;

    public function __construct()
    {
        $this->product = new Product();
    }

    public function buildPartA()
    {
        $this->product->add('部件X');
    }

    public function buildPartB()
    {
        $this->product->add('部件Y');
    }

    public function getResult(): Product
    {
        return $this->product;
    }
}