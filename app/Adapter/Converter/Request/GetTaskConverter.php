<?php

namespace App\Adapter\Converter\Request;

use App\Adapter\Converter\RequestConverter;
use App\Domain\Core\Model\ValueObject\TaskId;
use App\Domain\Core\Service\UsecaseInput\GetTaskInput;

/**
 * Class GetTaskConverter
 * @package App\Adapter\Converter\Request
 */
class GetTaskConverter extends RequestConverter implements GetTaskInput
{
    private TaskId $taskId;

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
