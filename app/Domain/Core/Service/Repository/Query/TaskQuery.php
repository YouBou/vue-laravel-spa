<?php

namespace App\Domain\Core\Service\Repository\Query;

use App\Domain\Core\Model\Entity\Task\Task;
use App\Domain\Core\Model\ValueObject\Task\TaskId;

/**
 * Interface TaskQuery
 * @package App\Domain\Core\Service\Repository\Query
 */
interface TaskQuery
{
    /**
     * @return Task[]
     */
    public function getTasks(): array;

    /**
     * @param TaskId $taskId
     * @return Task
     */
    public function getById(TaskId $taskId): Task;
}
