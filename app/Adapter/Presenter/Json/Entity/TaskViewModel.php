<?php

namespace App\Adapter\Presenter\Json\Entity;

use App\Adapter\Presenter\ViewModel\JsonViewModel;
use App\Domain\Core\Model\Entity\Task\Task;

/**
 * Class TaskViewModel
 * @package App\Adapter\Presenter\Json\Entity
 */
class TaskViewModel implements JsonViewModel
{
    /**
     * @param Task $task
     */
    public function __construct(
        public readonly Task $task
    ) {
    }

    private function getId(): string
    {
        return $this->task->id->value();
    }

    private function getTitle(): string
    {
        return $this->task->title->value();
    }

    private function getContent(): string
    {
        return $this->task->content->value();
    }

    private function getPersonInCharge(): string
    {
        return $this->task->personInCharge->value();
    }

    private function getCreatedAt(): string
    {
        return $this->task->createdAt;
    }

    private function getUpdatedAt(): string
    {
        return $this->task->updatedAt;
    }

    public function toArray(): array
    {
        return [
            "id" => $this->getId(),
            "title" => $this->getTitle(),
            "content" => $this->getContent(),
            "personInCharge" => $this->getPersonInCharge(),
            "createdAt" => $this->getCreatedAt(),
            "updatedAt" => $this->getUpdatedAt(),
        ];
    }
}
