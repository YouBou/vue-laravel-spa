<?php

namespace App\Domain\Core\Service\Repository\Query;

use App\Domain\Core\Model\Entity\Task;

/**
 * Interface TaskQuery
 * @package App\Domain\Core\Service\Repository\Query
 */
interface TaskQuery
{
    /**
     * @return Task[]
     */
    public function getTasks(): array;
}
