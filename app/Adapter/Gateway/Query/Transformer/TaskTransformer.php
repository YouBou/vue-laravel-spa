<?php

namespace App\Adapter\Gateway\Query\Transformer;

use App\Adapter\Gateway\Dao\Eloquent\Model\Task as EloquentTask;
use App\Domain\Core\Model\Entity\Task\Task;
use App\Domain\Core\Model\ValueObject\Task\Content;
use App\Domain\Core\Model\ValueObject\Task\PersonInCharge;
use App\Domain\Core\Model\ValueObject\Task\TaskId;
use App\Domain\Core\Model\ValueObject\Task\Title;
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
            new Title($taskMapper->title),
            new Content($taskMapper->content),
            new PersonInCharge($taskMapper->person_in_charge),
            $taskMapper->created_at,
            $taskMapper->updated_at
        );
    }
}
