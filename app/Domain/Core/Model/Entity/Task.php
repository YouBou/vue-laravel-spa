<?php

namespace App\Domain\Core\Model\Entity;

use App\Domain\Core\Model\ValueObject\TaskId;

/**
 * Class Task
 * @package App\Domain\Core\Model\Entity
 */
class Task
{
    /**
     * @param TaskId $id
     * @param string $title
     * @param string $content
     * @param string $personInCharge
     * @param string $createdAt
     * @param string $updatedAt
     */
    public function __construct(
        public readonly TaskId $id,
        public readonly string $title,
        public readonly string $content,
        public readonly string $personInCharge,
        public readonly string $createdAt,
        public readonly string $updatedAt
    ) {
    }
}
