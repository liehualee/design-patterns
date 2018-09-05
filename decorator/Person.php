<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/9/5
 * Time: 下午9:06
 */

namespace decorator;


class Person
{
    private $name;

    public function __construct(?string $name = '')
    {
        $this->name = $name;
    }

    public function show()
    {
        echo '装扮的' . $this->name;
    }
}