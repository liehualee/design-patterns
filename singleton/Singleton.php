<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/9/29
 * Time: 上午7:20
 */

namespace singleton;


class Singleton
{
    private static $instance;

    private function __construct()
    {
    }

    private function __clone()
    {
    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new Singleton();
        }

        return self::$instance;
    }
}