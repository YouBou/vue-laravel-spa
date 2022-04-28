<?php

namespace App\Domain\Core\Service\Usecase;

use App\Domain\Core\Service\Repository\Command\TaskCommand;
use App\Domain\Core\Service\Repository\Dto\TaskInput;
use App\Domain\Core\Service\UsecaseInput\PutTaskInput;

/**
 * Class PutTaskUsecase
 * @package App\Domain\Core\Service\Usecase
 */
class PutTaskUsecase
{
    /**
     * @param TaskCommand $taskCommand
     */
    public function __construct(
        private TaskCommand $taskCommand
    ) {
    }

    public function execute(PutTaskInput $input): void
    {
        $taskInput = new TaskInput(
            $input->getTaskId(),
            $input->getTitle(),
            $input->getContent(),
            $input->getPersonInCharge()
        );
        $this->taskCommand->update($taskInput);
    }
}
