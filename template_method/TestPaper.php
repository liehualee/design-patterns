<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/9/18
 * Time: 上午7:19
 */

namespace template_method;


abstract class TestPaper
{
    public function testQuestion1()
    {
        echo '选择题1：a.1 b.2 c.3 d.4' . PHP_EOL;
        echo '答案：' . $this->answer1() . PHP_EOL;
    }

    public abstract function answer1(): string;

    public function testQuestion2()
    {
        echo '选择题2：a.11 b.22 c.33 d.44' . PHP_EOL;
        echo '答案：' . $this->answer2() . PHP_EOL;
    }

    public abstract function answer2(): string;

    public function testQuestion3()
    {
        echo '选择题3：a.111 b.222 c.333 d.444' . PHP_EOL;
        echo '答案：' . $this->answer3() . PHP_EOL;
    }

    public abstract function answer3(): string;
}