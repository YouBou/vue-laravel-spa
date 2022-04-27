<?php

namespace App\Domain\Core\Service\UsecaseInput;

use App\Domain\Core\Model\ValueObject\Task\TaskId;

/**
 * Interface GetTaskInput
 * @package App\Domain\Core\Service\UsecaseInput
 */
interface GetTaskInput
{
    /**
     * @return TaskId
     */
    public function getTaskId(): TaskId;
}
