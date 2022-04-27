<?php

namespace App\Domain\Core\Service\UsecaseOutput\Impls;

use App\Domain\Core\Model\ValueObject\Task\TaskId;
use App\Domain\Core\Service\UsecaseOutput\PostTaskOutput;

/**
 * Class PostTaskOutputImpl
 * @package App\Domain\Core\Service\UsecaseOutput\Impls
 */
class PostTaskOutputImpl implements PostTaskOutput
{
    /**
     * @param TaskId $taskId
     */
    public function __construct(
        private readonly TaskId $taskId
    ) {
    }

    /**
     * @return TaskId
     */
    public function getTaskId(): TaskId
    {
        return $this->taskId;
    }
}
