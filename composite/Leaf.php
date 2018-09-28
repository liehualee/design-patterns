<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/9/28
 * Time: 上午7:40
 */

namespace composite;

/**
 * 叶节点
 * Class Leaf
 * @package composite
 */
class Leaf extends Component
{
    public function __construct($name)
    {
        parent::__construct($name);
    }

    public function add(Component $c)
    {
        echo 'cannot add to a leaf' . PHP_EOL;
    }

    public function remove(Component $c)
    {
        echo 'cannot remove from a leaf' . PHP_EOL;
    }

    public function display(int $depth)
    {
        $label = '';
        for ($i = 0; $i < $depth; ++$i) {
            $label .= '-';
        }
        echo $label . $this->name . PHP_EOL;
    }
}