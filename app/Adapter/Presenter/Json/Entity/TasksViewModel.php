<?php

namespace App\Adapter\Presenter\Json\Entity;

use App\Adapter\Presenter\ViewModel\JsonViewModel;
use App\Domain\Core\Model\Entity\Task;

/**
 * Class TasksViewModel
 * @package App\Adapter\Presenter\Json\Entity
 */
class TasksViewModel implements JsonViewModel
{
    /**
     * @param Task[] $tasks
     */
    public function __construct(
        public readonly array $tasks
    ) {
    }

    /**
     * @return TaskViewModel[]
     */
    private function getTasksViewModels(): array
    {
        return array_map(fn (Task $task) => new TaskViewModel($task), $this->tasks);
    }

    public function toArray(): array
    {
        return [
            "tasks" => $this->getTasksViewModels(),
        ];
    }
}
