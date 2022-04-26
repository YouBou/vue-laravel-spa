<?php

namespace App\Domain\Core\Service\Factory;

use App\Domain\Core\Model\Entity\Task;
use App\Domain\Core\Model\ValueObject\TaskId;
use App\Domain\Core\Service\Repository\Query\TaskQuery;

/**
 * Class TaskFactory
 * @package App\Domain\Core\Service\Factory
 */
class TaskFactory
{
    /**
     * @param TaskQuery $taskRepository
     */
    public function __construct(
        private readonly TaskQuery $taskRepository
    ) {
    }

    /**
     * @return Task[]
     */
    public function getTasks(): array
    {
        return $this->taskRepository->getTasks();
    }

    /**
     * @param TaskId $taskId
     * @return Task
     */
    public function getById(TaskId $taskId): Task
    {
        return $this->taskRepository->getById($taskId);
    }
}
