<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/9/28
 * Time: 上午7:37
 */

namespace composite;

/**
 * 对象声明接口，实现所有类共有接口的默认行为，用于访问和管理Component的子部件
 * Class Component
 * @package composite
 */
abstract class Component
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public abstract function add(Component $c);
    public abstract function remove(Component $c);
    public abstract function display(int $depth);
}