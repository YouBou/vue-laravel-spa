<?php

namespace App\Domain\Core\Service\UsecaseOutput;

use App\Domain\Core\Model\ValueObject\Task\TaskId;

/**
 * Interface PostTaskOutput
 * @package App\Domain\Core\Service\UsecaseOutput
 */
interface PostTaskOutput
{
    /**
     * @return TaskId
     */
    public function getTaskId(): TaskId;
}
