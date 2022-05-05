<?php

namespace App\Domain\Core\Service\UsecaseInput;

use App\Domain\Core\Model\ValueObject\Task\TaskId;

/**
 * Interface DeleteTaskInput
 */
interface DeleteTaskInput
{
    /**
     * @return TaskId
     * @package App\Domain\Core\Service\UsecaseInput
     */
    public function getTaskId(): TaskId;
}