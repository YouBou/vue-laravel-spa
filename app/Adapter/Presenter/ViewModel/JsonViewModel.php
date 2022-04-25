<?php

namespace App\Adapter\Presenter\ViewModel;

/**
 * Interface JsonViewModel
 * @package App\Adapter\Presenter\ViewModel
 */
interface JsonViewModel
{
    /**
     * @return array
     */
    public function toArray(): array;
}
