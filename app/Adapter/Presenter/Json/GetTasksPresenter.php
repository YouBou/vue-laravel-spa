<?php

namespace App\Adapter\Presenter\Json;

use App\Adapter\Presenter\Json\Entity\TasksViewModel;
use App\Adapter\Presenter\JsonPresenter;
use App\Domain\Core\Service\UsecaseOutput\GetTasksOutput;
use Illuminate\Http\JsonResponse;
use Exception;

/**
 * Class GetTasksPresenter
 * @package App\Adapter\Presenter\Json
 */
class GetTasksPresenter extends JsonPresenter
{
    /**
     * @param GetTasksOutput $output
     * @return JsonResponse
     * @throws Exception
     */
    public function execute(GetTasksOutput $output): JsonResponse
    {
        return $this->jsonResponse(
            new TasksViewModel($output->getTasks())
        );
    }
}
