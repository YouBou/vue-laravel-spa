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
     * @param TaskFactory $tasksRepository
     */
    public function __construct(
        private readonly TaskFactory $tasksRepository
    ) {
    }

    /**
     * @return GetTasksOutput
     */
    public function execute(): GetTasksOutput
    {
        $tasks = $this->tasksRepository->getTasks();
        return new GetTasksOutputImpl($tasks);
    }
}
