<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/9/17
 * Time: 上午7:33
 */

namespace prototype;


class WorkExperience
{
    private $workDate;
    private $company;

    /**
     * @return mixed
     */
    public function getWorkDate()
    {
        return $this->workDate;
    }

    /**
     * @param mixed $workDate
     */
    public function setWorkDate($workDate): void
    {
        $this->workDate = $workDate;
    }

    /**
     * @return mixed
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @param mixed $company
     */
    public function setCompany($company): void
    {
        $this->company = $company;
    }
}