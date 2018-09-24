<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/9/21
 * Time: 上午7:32
 */

namespace abstract_factory;


class SqlserverDepartmentDao implements IDepartmentDao
{
    public function insert(Department $department)
    {
        echo '在SQL SERVER中给Department表插入一条记录' . PHP_EOL;
    }

    public function getDepartment(int $id)
    {
        echo '在SQL SERVER中根据ID得到Department表一条记录' . PHP_EOL;
    }
}