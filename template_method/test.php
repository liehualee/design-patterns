<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/9/18
 * Time: 下午9:59
 */

namespace template_method;

require_once './AutoLoader.php';

echo '学生A的试卷：' . PHP_EOL;
$paperA = new TestPaperA();
$paperA->testQuestion1();
$paperA->testQuestion2();
$paperA->testQuestion3();

echo '学生B的试卷：' . PHP_EOL;
$paperB = new TestPaperB();
$paperB->testQuestion1();
$paperB->testQuestion2();
$paperB->testQuestion3();