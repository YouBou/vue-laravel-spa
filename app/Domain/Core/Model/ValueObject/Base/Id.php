<?php

namespace App\Domain\Core\Model\ValueObject\Base;

use Exception;

/**
 * Class Id
 * @package App\Domain\Core\Model\ValueObject\Base
 */
abstract class Id
{
    /**
     * @param string $value
     * @throws Exception
     */
    public function __construct(
        private readonly string $value
    ) {
        if ($value === '' || !is_numeric($value)) {
            throw new Exception(static::class." can't be empty $value");
        }
    }

    /**
     * @return string
     */
    public function value(): string
    {
        return $this->value;
    }
}
