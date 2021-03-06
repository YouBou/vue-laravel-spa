<?php

namespace App\Domain\Core\Service\Usecase;

use App\Domain\Core\Service\Factory\TaskFactory;
use App\Domain\Core\Service\UsecaseOutput\GetTasksOutput;
use App\Domain\Core\Service\UsecaseOutput\Impls\GetTasksOutputImpl;

/**
 * Class GetTasksUsecase
 * @package App\Domain\Core\Service\Usecase
 */
class GetTasksUsecase
{
    /**
     * @param TaskFactory $taskRepository
     */
    public function __construct(
        private readonly TaskFactory $taskRepository
    ) {
    }

    /**
     * @return GetTasksOutput
     */
    public function execute(): GetTasksOutput
    {
        $tasks = $this->taskRepository->getTasks();
        return new GetTasksOutputImpl($tasks);
    }
}
