<?php

namespace App\Adapter\Converter\Request;

use App\Adapter\Converter\RequestConverter;
use App\Domain\Core\Model\ValueObject\Task\TaskId;
use App\Domain\Core\Service\UsecaseInput\DeleteTaskInput;
use Exception;

/**
 * Class DeleteTaskConverter
 * @package App\Adapter\Converter\Request
 */
class DeleteTaskConverter extends RequestConverter implements DeleteTaskInput
{
    private TaskId $taskId;

    /**
     * @return void
     * @throws Exception
     */
    protected function execute(): void
    {
        $this->taskId = new TaskId((string) $this->request->route('taskId'));
    }

    /**
     * @return TaskId
     */
    public function getTaskId(): TaskId
    {
        return $this->taskId;
    }
}