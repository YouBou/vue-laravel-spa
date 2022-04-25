<?php

namespace App\Domain\Core\Service\UsecaseOutput;

use App\Domain\Core\Model\Entity\Task;

/**
 * Interface GetTasksOutput
 * @package App\Domain\Core\Service\UsecaseOutput
 */
interface GetTasksOutput
{
    /**
     * @return Task[]
     */
    public function getTasks(): array;
}
