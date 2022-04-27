<?php

namespace App\Domain\Core\Model\ValueObject\Task;

use App\Domain\Core\Model\ValueObject\Base\NonEmptyString;

/**
 * Class Title
 * @package App\Domain\Core\Model\ValueObject\Task
 */
class Title extends NonEmptyString
{
    protected const MAX_LENGTH = 100;
}
