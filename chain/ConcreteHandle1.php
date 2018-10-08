<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/10/8
 * Time: 上午8:03
 */

namespace chain;


class ConcreteHandle1 extends Handle
{

    public function handleRequest(int $request)
    {
        if ($request >= 0 && $request < 10) {
            echo 'handle1处理请求：' . $request . PHP_EOL;
        } else {
            if ($this->handle) {
                $this->handle->handleRequest($request);
            }
        }
    }
}