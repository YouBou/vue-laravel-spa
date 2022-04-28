<?php

namespace App\Adapter\Gateway\Command\Transformer;

use App\Domain\Core\Service\Repository\Dto\TaskInput;

class TaskTransformer
{
    /**
     * @param TaskInput $taskInput
     * @return array
     */
    public function toRawValues(TaskInput $taskInput): array
    {
        return array_filter([
            "id" => $taskInput->taskId?->value(),
            "title" => $taskInput->title->value(),
            "content" => $taskInput->content->value(),
            "person_in_charge" => $taskInput->personInCharge->value(),
            "created_at" => !is_null($taskInput->taskId) ? null : date("Y-m-d H:i:s"),
            "updated_at" =>date("Y-m-d H:i:s"),
        ], fn($value) => !is_null($value));
    }
}
