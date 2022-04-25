<?php

namespace App\Adapter\Gateway\Dao\Eloquent;

use App\Adapter\Gateway\Dao\Eloquent\Model\Task;
use Illuminate\Database\Eloquent\Collection;

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
}
