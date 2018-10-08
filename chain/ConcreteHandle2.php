<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/10/8
 * Time: 上午8:03
 */

namespace chain;


class ConcreteHandle2 extends Handle
{

    public function handleRequest(int $request)
    {
        if ($request >= 20 && $request < 30) {
            echo 'handle3处理请求：' . $request . PHP_EOL;
        } else {
            if ($this->handle) {
                $this->handle->handleRequest($request);
            }
        }
    }
}