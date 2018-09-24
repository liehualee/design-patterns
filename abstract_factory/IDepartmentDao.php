<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/9/21
 * Time: 上午7:31
 */

namespace abstract_factory;


interface IDepartmentDao
{
    public function insert(Department $department);
    public function getDepartment(int $id);
}