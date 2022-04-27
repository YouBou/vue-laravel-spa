<?php

namespace App\Adapter\Gateway\Query;

use App\Adapter\Gateway\Dao\Eloquent\Model\Task as TaskEloquentModel;
use App\Adapter\Gateway\Dao\Eloquent\TaskEloquentDao;
use App\Adapter\Gateway\Query\Transformer\TaskTransformer;
use App\Domain\Core\Model\Entity\Task\Task;
use App\Domain\Core\Model\ValueObject\Task\TaskId;
use App\Domain\Core\Service\Repository\Query\TaskQuery;
use Exception;

/**
 * Class TaskQueryGateway
 * @package App\Adapter\Gateway\Query
 */
class TaskQueryGateway implements TaskQuery
{
    /**
     * @param TaskEloquentDao $taskDao
     * @param TaskTransformer $taskTransformer
     */
    public function __construct(
        private readonly TaskEloquentDao $taskDao,
        private readonly TaskTransformer $taskTransformer
    ) {
    }

    /**
     * @return Task[]
     */
    public function getTasks(): array
    {
        $taskMappers = $this->taskDao->getTasks();
        return $taskMappers->map(function (TaskEloquentModel $taskMapper) {
            return $this->taskTransformer->toTask($taskMapper);
        })
        ->all();
    }

    /**
     * @param TaskId $taskId
     * @return Task
     * @throws Exception
     */
    public function getById(TaskId $taskId): Task
    {
        /** @var TaskEloquentModel $taskMapper */
        $taskMapper = $this->taskDao->getById($taskId->value());
        return $this->taskTransformer->toTask($taskMapper);
    }
}
