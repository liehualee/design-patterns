<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/9/4
 * Time: 下午9:59
 */

namespace state;

require_once './AutoLoader.php';

$work = new Work();
$work->setHour(9);
$work->writeProgram();
$work->setHour(10);
$work->writeProgram();
$work->setHour(12);
$work->writeProgram();
$work->setHour(13);
$work->writeProgram();
$work->setHour(14);
$work->writeProgram();
$work->setHour(17);
$work->setFinish(false);
$work->writeProgram();

$work->setHour(19);
$work->writeProgram();
$work->setHour(22);
$work->writeProgram();