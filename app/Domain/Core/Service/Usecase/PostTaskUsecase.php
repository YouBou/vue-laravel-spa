<?php

namespace App\Domain\Core\Service\Usecase;

use App\Domain\Core\Service\Repository\Command\TaskCommand;
use App\Domain\Core\Service\Repository\Dto\TaskInput;
use App\Domain\Core\Service\UsecaseInput\PostTaskInput;
use App\Domain\Core\Service\UsecaseOutput\Impls\PostTaskOutputImpl;
use App\Domain\Core\Service\UsecaseOutput\PostTaskOutput;

/**
 * Class PostTaskUsecase
 * @package App\Domain\Core\Service\Usecase
 */
class PostTaskUsecase
{
    /**
     * @param TaskCommand $taskCommand
     */
    public function __construct(
        private readonly TaskCommand $taskCommand
    ) {
    }

    /**
     * @param PostTaskInput $input
     * @return PostTaskOutput
     */
    public function execute(PostTaskInput $input): PostTaskOutput
    {
        $taskInput = new TaskInput(
            null,
            $input->getTitle(),
            $input->getContent(),
            $input->getPersonInCharge()
        );
        $taskId = $this->taskCommand->create($taskInput);
        return new PostTaskOutputImpl($taskId);
    }
}
