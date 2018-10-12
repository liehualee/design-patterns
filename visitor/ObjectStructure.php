<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/10/12
 * Time: 上午7:44
 */

namespace visitor;


class ObjectStructure
{
    /**
     * @var Element[]
     */
    private $elements = [];

    public function attach(Element $element)
    {
        $this->elements[] = $element;
    }

    public function detach(Element $element)
    {
        $offset = array_search($element, $this->elements);

        if ($offset !== false) {
            unset($this->elements[$offset]);
        }
    }

    public function accept(Visitor $visitor)
    {
        foreach ($this->elements as $element) {
            $element->accept($visitor);
        }
    }
}