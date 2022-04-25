<?php

namespace App\Adapter\Gateway\Query\Transformer;

use App\Domain\Core\Model\Entity\Task;
use App\Adapter\Gateway\Dao\Eloquent\Model\Task as EloquentTask;

/**
 * Class TaskTransformer
 * @package App\Adapter\Gateway\Query\Transformer
 */
class TaskTransformer
{
    /**
     * @param EloquentTask $taskMapper
     * @return Task
     */
    public function toTask(EloquentTask $taskMapper): Task
    {
        return new Task(
            $taskMapper->id,
            $taskMapper->title,
            $taskMapper->content,
            $taskMapper->person_in_charge,
            $taskMapper->created_at,
            $taskMapper->updated_at
        );
    }
}
