<?php

namespace App\Domain\Core\Service\Usecase;

use App\Domain\Core\Service\Factory\TaskFactory;
use App\Domain\Core\Service\UsecaseInput\GetTaskInput;
use App\Domain\Core\Service\UsecaseOutput\GetTaskOutput;
use App\Domain\Core\Service\UsecaseOutput\Impls\GetTaskOutputImpl;

/**
 * Class GetTaskUsecase
 * @package App\Domain\Core\Service\Usecase
 */
class GetTaskUsecase
{
    /**
     * @param TaskFactory $taskRepository
     */
    public function __construct(
        private readonly TaskFactory $taskRepository
    ) {
    }

    /**
     * @param GetTaskInput $input
     * @return GetTaskOutput
     */
    public function execute(GetTaskInput $input): GetTaskOutput
    {
        $task = $this->taskRepository->getById($input->getTaskId());
        return new GetTaskOutputImpl($task);
    }
}
