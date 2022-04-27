<?php

namespace App\Domain\Core\Model\Entity\Task;

use App\Domain\Core\Model\ValueObject\Task\Content;
use App\Domain\Core\Model\ValueObject\Task\PersonInCharge;
use App\Domain\Core\Model\ValueObject\Task\TaskId;
use App\Domain\Core\Model\ValueObject\Task\Title;

/**
 * Class Task
 * @package App\Domain\Core\Model\Entity\Task
 */
class Task
{
    /**
     * @param TaskId $id
     * @param Title $title
     * @param Content $content
     * @param PersonInCharge $personInCharge
     * @param string $createdAt
     * @param string $updatedAt
     */
    public function __construct(
        public readonly TaskId $id,
        public readonly Title $title,
        public readonly Content $content,
        public readonly PersonInCharge $personInCharge,
        public readonly string $createdAt,
        public readonly string $updatedAt
    ) {
    }
}
