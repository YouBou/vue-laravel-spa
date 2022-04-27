<?php

namespace App\Domain\Core\Service\UsecaseOutput;

use App\Domain\Core\Model\Entity\Task\Task;

/**
 * Interface GetTaskOutput
 * @package App\Domain\Core\Service\UsecaseOutput
 */
interface GetTaskOutput
{
    /**
     * @return Task
     */
    public function getTask(): Task;
}
