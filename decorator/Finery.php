<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/9/5
 * Time: 下午9:09
 */

namespace decorator;


class Finery extends Person
{
    /**
     * 没有构造函数赋值需定义类型
     * @var $person Person
     */
    protected $person;

    public function decorate(Person $component)
    {
        $this->person = $component;
    }

    public function show()
    {
        if ($this->person !== null) {
            $this->person->show();
        }
    }
}