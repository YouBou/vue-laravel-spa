<?php

namespace App\Adapter\Gateway\Query;

use App\Adapter\Gateway\Dao\Eloquent\Model\Task as TaskEloquentModel;
use App\Adapter\Gateway\Dao\Eloquent\TaskEloquentDao;
use App\Adapter\Gateway\Query\Transformer\TaskTransformer;
use App\Domain\Core\Model\Entity\Task;
use App\Domain\Core\Service\Repository\Query\TaskQuery;

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
}
