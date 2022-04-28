<?php

namespace App\Providers;

use App\Adapter\Gateway\Command\TaskCommandGateway;
use App\Adapter\Gateway\Query\TaskQueryGateway;
use App\Domain\Core\Service\Repository\Command\TaskCommand;
use App\Domain\Core\Service\Repository\Query\TaskQuery;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * 通常のIoCコンテナのバインディング
     * @var array<string, string>
     */
    public $bindings = [
        TaskQuery::class => TaskQueryGateway::class,
        TaskCommand::class => TaskCommandGateway::class
    ];

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
