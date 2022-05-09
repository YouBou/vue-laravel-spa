<?php

namespace App\Domain\Core\Service\Usecase;

use App\Domain\Core\Service\Repository\Command\TaskCommand;
use App\Domain\Core\Service\UsecaseInput\DeleteTaskInput;

/**
 * Class DeleteTaskUsecase
 * @package App\Domain\Core\Service\Usecase
 */
class DeleteTaskUsecase
{
    /**
     * @param TaskCommand $taskCommand
     */
    public function __construct(
        private TaskCommand $taskCommand
    ) {
    }

    /**
     * @param DeleteTaskInput $input
     * @return void
     */
    public function execute(DeleteTaskInput $input): void
    {
        $this->taskCommand->delete($input->getTaskId());
    }
}
