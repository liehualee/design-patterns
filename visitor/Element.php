<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/10/12
 * Time: 上午7:40
 */

namespace visitor;


abstract class Element
{
    public abstract function accept(Visitor $visitor);
}