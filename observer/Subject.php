<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/9/20
 * Time: 上午7:37
 */

namespace observer;

abstract class Subject
{
    /**
     * @var Observer[]
     */
    private $observers;

    public function __construct()
    {
        $this->observers = [];
    }

    public function attach(Observer $observer)
    {
        $this->observers[$observer->getId()] = $observer;
    }

    public function detach(Observer $observer)
    {
        unset($this->observers[$observer->getId()]);
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update();
        }
    }
}