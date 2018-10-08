<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/10/8
 * Time: 上午8:01
 */

namespace chain;


abstract class Handle
{
    /**
     * @var Handle
     */
    protected $handle;

    public abstract function handleRequest(int $request);

    /**
     * @param Handle $handle
     */
    public function setHandle(Handle $handle): void
    {
        $this->handle = $handle;
    }
}