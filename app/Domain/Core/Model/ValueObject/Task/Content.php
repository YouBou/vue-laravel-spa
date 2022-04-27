<?php

namespace App\Domain\Core\Model\ValueObject\Task;

use App\Domain\Core\Model\ValueObject\Base\NonEmptyString;

/**
 * Class Content
 * @package App\Domain\Core\Model\Entity\Task
 */
class Content extends NonEmptyString
{
    protected const MAX_LENGTH = 100;
}
