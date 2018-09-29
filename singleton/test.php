<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/9/29
 * Time: 下午9:59
 */

namespace singleton;

require_once './AutoLoader.php';

$s1 = Singleton::getInstance();
$s2 = Singleton::getInstance();

if ($s1 === $s2) {
    echo '两个对象是相同的实例！' . PHP_EOL;
}
