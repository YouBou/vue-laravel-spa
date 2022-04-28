<?php

namespace App\Domain\Core\Service\Repository\Dto;

use App\Domain\Core\Model\ValueObject\Task\Content;
use App\Domain\Core\Model\ValueObject\Task\PersonInCharge;
use App\Domain\Core\Model\ValueObject\Task\TaskId;
use App\Domain\Core\Model\ValueObject\Task\Title;

/**
 * Class TaskInput
 * @package App\Domain\Core\Service\Repository\Dto
 */
class TaskInput
{
    /**
     * @param TaskId|null $taskId
     * @param Title $title
     * @param Content $content
     * @param PersonInCharge $personInCharge
     */
    public function __construct(
        public readonly ?TaskId $taskId,
        public readonly Title $title,
        public readonly Content $content,
        public readonly PersonInCharge $personInCharge
    ) {
    }
}
