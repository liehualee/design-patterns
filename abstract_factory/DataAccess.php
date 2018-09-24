<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/9/21
 * Time: 上午7:48
 */

namespace abstract_factory;


class DataAccess
{
    public static function createUserDao(): IUserDao
    {
        $dbConfig = self::getDBConfig();
        $className = sprintf('\%s\%sUserDao', __NAMESPACE__, $dbConfig);
        return new $className();
    }

    public static function createDepartmentDao(): IDepartmentDao
    {
        $dbConfig = self::getDBConfig();
        $className = sprintf('\%s\%sDepartmentDao', __NAMESPACE__, $dbConfig);
        return new $className();
    }

    private static function getDBConfig(): string
    {
        return trim(file_get_contents(__DIR__ . '/db.conf'));
    }
}