<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/9/17
 * Time: 上午7:36
 */

namespace prototype;


class Resume
{
    /**
     * @var $name string
     */
    private $name;
    /**
     * @var $sex string
     */
    private $sex;
    /**
     * @var $age string
     */
    private $age;
    /**
     * @var $work WorkExperience
     */
    private $work;

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->work = new WorkExperience();
    }

    public function display()
    {
        echo sprintf('%s %s %s', $this->name, $this->sex, $this->age);
        echo sprintf('工作经历：%s %s', $this->work->getWorkDate(), $this->work->getCompany());
    }

    /**
     * 深复制
     */
    public function __clone()
    {
        $this->work = clone $this->work;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getSex(): string
    {
        return $this->sex;
    }

    /**
     * @param string $sex
     */
    public function setSex(string $sex): void
    {
        $this->sex = $sex;
    }

    /**
     * @return string
     */
    public function getAge(): string
    {
        return $this->age;
    }

    /**
     * @param string $age
     */
    public function setAge(string $age): void
    {
        $this->age = $age;
    }

    /**
     * @return WorkExperience
     */
    public function getWork(): WorkExperience
    {
        return $this->work;
    }

    public function setWork(string $workDate, string $company): void
    {
        $this->work->setWorkDate($workDate);
        $this->work->setCompany($company);
    }
}