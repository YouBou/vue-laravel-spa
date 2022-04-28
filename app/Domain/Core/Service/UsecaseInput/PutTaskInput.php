<?php

namespace App\Domain\Core\Service\UsecaseInput;

use App\Domain\Core\Model\ValueObject\Task\Content;
use App\Domain\Core\Model\ValueObject\Task\PersonInCharge;
use App\Domain\Core\Model\ValueObject\Task\TaskId;
use App\Domain\Core\Model\ValueObject\Task\Title;

/**
 * Interface PutTaskInput
 * @package App\Domain\Core\Service\UsecaseInput
 */
interface PutTaskInput
{
    /**
     * @return TaskId
     */
    public function getTaskId(): TaskId;

    /**
     * @return Title
     */
    public function getTitle(): Title;

    /**
     * @return Content
     */
    public function getContent(): Content;

    /**
     * @return PersonInCharge
     */
    public function getPersonInCharge(): PersonInCharge;
}
