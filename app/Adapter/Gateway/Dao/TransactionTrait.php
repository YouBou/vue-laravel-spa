<?php

namespace App\Adapter\Gateway\Dao;

use Illuminate\Database\DatabaseManager;
use Throwable;

trait TransactionTrait
{
    /**
     * TransactionTrait constructor.
     * @param DatabaseManager $databaseManager
     */
    public function __construct(
        private readonly DatabaseManager $databaseManager
    ) {
    }

    /**
     * @throws Throwable
     */
    public function beginTransaction(): void
    {
        $this->databaseManager->beginTransaction();
    }

    /**
     * @throws Throwable
     */
    public function commit(): void
    {
        $this->databaseManager->commit();
    }

    /**
     * @throws Throwable
     */
    public function rollBack(): void
    {
        $this->databaseManager->rollBack();
    }
}
