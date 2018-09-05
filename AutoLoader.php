<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/9/4
 * Time: 下午10:53
 */

class AutoLoader
{
    public static function loadClassLoader($class)
    {
        $dir = strstr($class, '\\', true);
        $className = substr(strstr($class, '\\', false), 1);
        require_once './' . $dir . '/' . $className . '.php';
    }
}

spl_autoload_register('AutoLoader::loadClassLoader');