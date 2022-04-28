<?php

namespace App\Adapter\Gateway\Dao\Eloquent;

use App\Adapter\Gateway\Dao\Eloquent\Model\Task;
use App\Adapter\Gateway\Dao\TransactionTrait;
use App\Domain\Core\Model\ValueObject\Task\TaskId;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Exception;

/**
 * Class TaskEloquentDao
 * @package App\Adapter\Gateway\Dao\Eloquent
 */
class TaskEloquentDao
{
    use TransactionTrait;

    /**
     * @return Collection
     */
    public function getTasks(): Collection
    {
        return Task::all();
    }

    /**
     * @param string $taskId
     * @return Model
     * @throws Exception
     */
    public function getById(string $taskId): Model
    {
        try {
            return Task::query()
                ->where('id', '=', $taskId)
                ->firstOrFail();
        } catch (ModelNotFoundException $e) {
            throw new Exception($e);
        }
    }

    /**
     * @param array $values
     * @return TaskId
     * @throws Exception
     */
    public function insert(array $values): TaskId
    {
        $taskId = Task::query()
            ->insertGetId($values);
        return new TaskId((string) $taskId);
    }

    /**
     * @param string $taskId
     * @param array $values
     * @return void
     */
    public function update(string $taskId, array $values): void
    {
        Task::query()
            ->where('id', '=', $taskId)
            ->update($values);
    }
}
