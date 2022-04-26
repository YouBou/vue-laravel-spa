<?php

namespace App\Http\Controllers;

use App\Adapter\Converter\Request\GetTaskConverter;
use App\Adapter\Presenter\Json\GetTaskPresenter;
use App\Domain\Core\Service\Usecase\GetTaskUsecase;
use Illuminate\Http\JsonResponse;
use Exception;

/**
 * Class TaskController
 * @package App\Http\Controllers
 */
class TaskController extends Controller
{
    /**
     * @param GetTaskConverter $input
     * @param GetTaskUsecase $usecase
     * @param GetTaskPresenter $presenter
     * @return JsonResponse
     * @throws Exception
     */
    public function get(GetTaskConverter $input, GetTaskUsecase $usecase, GetTaskPresenter $presenter): JsonResponse
    {
        $output = $usecase->execute($input);
        return $presenter->execute($output);
    }
}
