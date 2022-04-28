<?php

namespace App\Adapter\Gateway\Command;

use App\Adapter\Gateway\Command\Transformer\TaskTransformer;
use App\Adapter\Gateway\Dao\Eloquent\TaskEloquentDao;
use App\Domain\Core\Model\ValueObject\Task\TaskId;
use App\Domain\Core\Service\Repository\Command\TaskCommand;
use App\Domain\Core\Service\Repository\Dto\TaskInput;
use Throwable;
use Exception;

/**
 * Class TaskCommandGateway
 * @package App\Adapter\Gateway\Command
 */
class TaskCommandGateway implements TaskCommand
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
     * @param TaskInput $input
     * @return TaskId
     * @throws Throwable
     * @throws Exception
     */
    public function create(TaskInput $input): TaskId
    {
        try {
            $this->taskDao->beginTransaction();
            $taskId = $this->taskDao->insert(
                $this->taskTransformer->toRawValues($input)
            );
            $this->taskDao->commit();
        } catch (Exception $e) {
            $this->taskDao->rollBack();
        }
        return $taskId;
    }
}
