<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/9/21
 * Time: 上午7:25
 */

namespace abstract_factory;


class AccessUserDao implements IUserDao
{

    public function insert(User $user)
    {
        echo '在ACCESS中给User表插入一条记录' . PHP_EOL;
    }

    public function getUser(int $id)
    {
        echo '在ACCESS中根据ID得到User表一条记录' . PHP_EOL;
    }
}