<?php

namespace App\Http\Middleware;

use Illuminate\Database\DatabaseManager;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Closure;
use Throwable;

/**
 * Class Transaction
 * @package App\Http\Middleware
 */
class Transaction
{
    /**
     * @param DatabaseManager $databaseManager
     */
    public function __construct(
        private DatabaseManager $databaseManager
    ) {
    }

    /**
     * @param Request $request
     * @param Closure $next
     * @return mixed
     * @throws Throwable
     */
    public function handle(Request $request, Closure $next): mixed
    {
        $this->databaseManager->beginTransaction();
        $response = $next($request);

        if ($response instanceof JsonResponse && !empty($response->exception)) {
            $this->databaseManager->rollBack();
        } else {
            $this->databaseManager->commit();
        }

        return $response;
    }
}
