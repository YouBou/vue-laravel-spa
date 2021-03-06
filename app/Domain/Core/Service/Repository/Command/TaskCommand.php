<?php

namespace App\Domain\Core\Service\Repository\Command;

use App\Domain\Core\Model\ValueObject\Task\TaskId;
use App\Domain\Core\Service\Repository\Dto\TaskInput;

/**
 * Interface TaskCommand
 * @package App\Domain\Core\Service\Repository\Command
 */
interface TaskCommand
{
    /**
     * @param TaskInput $input
     * @return TaskId
     */
    public function create(TaskInput $input): TaskId;

    /**
     * @param TaskInput $input
     * @return void
     */
    public function update(TaskInput $input): void;

    /**
     * @param TaskId $taskId
     * @return void
     */
    public function delete(TaskId $taskId): void;
}
