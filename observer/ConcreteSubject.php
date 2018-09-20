<?php
/**
 * Created by PhpStorm.
 * User: llh
 * Date: 2018/9/20
 * Time: 上午7:51
 */

namespace observer;


class ConcreteSubject extends Subject
{
    private $subjectStatus;

    /**
     * @return mixed
     */
    public function getSubjectStatus()
    {
        return $this->subjectStatus;
    }

    /**
     * @param string $subjectStatus
     */
    public function setSubjectStatus($subjectStatus): void
    {
        $this->subjectStatus = $subjectStatus;
    }
}