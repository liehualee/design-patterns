<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/9/17
 * Time: 下午9:59
 */

namespace prototype;

require_once './AutoLoader.php';

$a = new Resume('小李');
$a->setWork('1998-2000', 'XX公司');

$b = clone($a);
$b->setWork('1995-2005', 'YY公司');

$a->display();
$b->display();

