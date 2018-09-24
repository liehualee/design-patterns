<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/9/21
 * Time: 上午7:22
 */

namespace abstract_factory;


class SqlserverUserDao implements IUserDao
{

    public function insert(User $user)
    {
        echo '在SQL SERVER中给User表插入一条记录' . PHP_EOL;
    }

    public function getUser(int $id)
    {
        echo '在SQL SERVER中根据ID得到User表一条记录' . PHP_EOL;
    }
}