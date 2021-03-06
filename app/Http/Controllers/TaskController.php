<?php

namespace App\Http\Controllers;

use App\Adapter\Converter\Request\DeleteTaskConverter;
use App\Adapter\Converter\Request\GetTaskConverter;
use App\Adapter\Converter\Request\PostTaskConverter;
use App\Adapter\Converter\Request\PutTaskConverter;
use App\Adapter\Presenter\Json\GetTaskPresenter;
use App\Adapter\Presenter\Json\PostTaskPresenter;
use App\Domain\Core\Service\Usecase\DeleteTaskUsecase;
use App\Domain\Core\Service\Usecase\GetTaskUsecase;
use App\Domain\Core\Service\Usecase\PostTaskUsecase;
use App\Domain\Core\Service\Usecase\PutTaskUsecase;
use App\Http\Middleware\Transaction;
use Illuminate\Http\JsonResponse;
use Exception;

/**
 * Class TaskController
 * @package App\Http\Controllers
 */
class TaskController extends Controller
{
    public function __construct()
    {
        $this->middleware(Transaction::class)->only(['post']);
    }

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

    /**
     * @param PostTaskConverter $input
     * @param PostTaskUsecase $usecase
     * @param PostTaskPresenter $presenter
     * @return JsonResponse
     * @throws Exception
     */
    public function post(PostTaskConverter $input, PostTaskUsecase $usecase, PostTaskPresenter $presenter): JsonResponse
    {
        $output = $usecase->execute($input);
        return $presenter->execute($output);
    }

    /**
     * @param PutTaskConverter $input
     * @param PutTaskUsecase $usecase
     * @return void
     */
    public function put(PutTaskConverter $input, PutTaskUsecase $usecase): void
    {
        $usecase->execute($input);
    }

    public function delete(DeleteTaskConverter $input, DeleteTaskUsecase $usecase): void
    {
        $usecase->execute($input);
    }
}
