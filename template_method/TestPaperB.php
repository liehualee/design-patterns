<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/9/18
 * Time: 上午7:24
 */

namespace template_method;


class TestPaperB extends TestPaper
{

    public function answer1(): string
    {
        return 'c';
    }

    public function answer2(): string
    {
        return 'd';
    }

    public function answer3(): string
    {
        return 'a';
    }
}