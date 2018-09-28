<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/9/28
 * Time: 上午7:44
 */

namespace composite;

/**
 * 枝节点
 * Class Composite
 * @package composite
 */
class Composite extends Component
{
    /**
     * @var Component[]
     */
    private $children = [];

    public function __construct($name)
    {
        parent::__construct($name);
    }

    public function add(Component $c)
    {
        array_push($this->children, $c);
    }

    public function remove(Component $c)
    {
        $offset = array_search($c, $this->children);

        if ($offset !== false) {
            unset($this->children[$offset]);
        }
    }

    public function display(int $depth)
    {
        $label = '';
        for ($i = 0; $i < $depth; ++$i) {
            $label .= '-';
        }
        echo $label . $this->name . PHP_EOL;

        foreach ($this->children as $component) {
            $component->display($depth + 2);
        }
    }
}