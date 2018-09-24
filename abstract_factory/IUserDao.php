<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/9/21
 * Time: 上午7:21
 */

namespace abstract_factory;


interface IUserDao
{
    public function insert(User $user);
    public function getUser(int $id);
}