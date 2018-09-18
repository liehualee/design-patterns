<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/9/18
 * Time: 上午7:24
 */

namespace template_method;


class TestPaperA extends TestPaper
{

    public function answer1(): string
    {
        return 'a';
    }

    public function answer2(): string
    {
        return 'b';
    }

    public function answer3(): string
    {
        return 'c';
    }
}