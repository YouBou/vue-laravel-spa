<?php

namespace App\Http\Controllers;

use App\Adapter\Presenter\Json\GetTasksPresenter;
use App\Domain\Core\Service\Usecase\GetTasksUsecase;
use Illuminate\Http\JsonResponse;
use Exception;

/**
 * Class TasksController
 * @package App\Http\Controllers
 */
class TasksController extends Controller
{
    /**
     * @param GetTasksUsecase $usecase
     * @param GetTasksPresenter $presenter
     * @return JsonResponse
     * @throws Exception
     */
    public function get(GetTasksUsecase $usecase, GetTasksPresenter $presenter): JsonResponse
    {
        $output = $usecase->execute();
        return $presenter->execute($output);
    }
}
