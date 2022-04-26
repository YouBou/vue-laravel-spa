<?php

namespace App\Adapter\Gateway\Dao\Eloquent;

use App\Adapter\Gateway\Dao\Eloquent\Model\Task;
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
}
