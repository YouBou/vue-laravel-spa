<?php

namespace App\Domain\Core\Service\UsecaseOutput\Impls;

use App\Domain\Core\Model\Entity\Task;
use App\Domain\Core\Service\UsecaseOutput\GetTasksOutput;

/**
 * Class GetTasksOutputImpl
 * @package App\Domain\Core\Service\UsecaseOutput\Impls
 */
class GetTasksOutputImpl implements GetTasksOutput
{
    /**
     * @param Task[] $tasks
     */
    public function __construct(
        private readonly array $tasks
    ) {
    }

    /**
     * @return Task[]
     */
    public function getTasks(): array
    {
        return $this->tasks;
    }
}
