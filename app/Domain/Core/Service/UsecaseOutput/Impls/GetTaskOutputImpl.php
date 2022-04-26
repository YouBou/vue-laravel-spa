<?php

namespace App\Domain\Core\Service\UsecaseOutput\Impls;

use App\Domain\Core\Model\Entity\Task;
use App\Domain\Core\Service\UsecaseOutput\GetTaskOutput;

/**
 * Class GetTaskOutputImpl
 * @package App\Domain\Core\Service\UsecaseOutput\Impls
 */
class GetTaskOutputImpl implements GetTaskOutput
{
    /**
     * @param Task $task
     */
    public function __construct(
        private readonly Task $task
    ) {
    }

    /**
     * @return Task
     */
    public function getTask(): Task
    {
        return $this->task;
    }
}
