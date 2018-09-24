<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/9/21
 * Time: 下午9:59
 */

namespace abstract_factory;

require_once './AutoLoader.php';

$user = new User();
$department = new Department();

$userDao = DataAccess::createUserDao();
$userDao->insert($user);
$userDao->getUser(1);

$departmentDao = DataAccess::createDepartmentDao();
$departmentDao->insert($department);
$departmentDao->getDepartment(1);