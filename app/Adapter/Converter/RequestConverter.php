<?php

namespace App\Adapter\Converter;

use Illuminate\Http\Request;
use Exception;
use Throwable;

/**
 * Class RequestConverter
 * @package App\Adapter\Converter
 */
abstract class RequestConverter
{
    /**
     * @param Request $request
     * @throws Exception
     */
    public function __construct(
        protected readonly Request $request
    ) {
        try {
            $this->execute();
        } catch (Throwable $throwable) {
            throw new Exception($throwable->getMessage(), 0, $throwable);
        }
    }

    abstract protected function execute(): void;
}
