<?php

namespace App\Domain\Core\Model\ValueObject\Base;

use Exception;

abstract class NonEmptyString
{
    protected const MAX_LENGTH = 0;

    /**
     * @param string $value
     * @throws Exception
     */
    public function __construct(
        private readonly string $value
    ) {
        if ($value === '' || mb_strlen(str_replace("\r\n", "\n", $value)) > static::MAX_LENGTH) {
            throw new Exception("The length of ".static::class." is invalid $value");
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
