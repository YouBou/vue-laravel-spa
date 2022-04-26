<?php

namespace App\Adapter\Gateway\Query\Transformer;

use App\Domain\Core\Model\Entity\Task;
use App\Adapter\Gateway\Dao\Eloquent\Model\Task as EloquentTask;
use App\Domain\Core\Model\ValueObject\TaskId;
use Exception;

/**
 * Class TaskTransformer
 * @package App\Adapter\Gateway\Query\Transformer
 */
class TaskTransformer
{
    /**
     * @param EloquentTask $taskMapper
     * @return Task
     * @throws Exception
     */
    public function toTask(EloquentTask $taskMapper): Task
    {
        return new Task(
            new TaskId($taskMapper->id),
            $taskMapper->title,
            $taskMapper->content,
            $taskMapper->person_in_charge,
            $taskMapper->created_at,
            $taskMapper->updated_at
        );
    }
}
