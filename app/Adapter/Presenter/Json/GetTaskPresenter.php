<?php

namespace App\Adapter\Presenter\Json;

use App\Adapter\Presenter\Json\Entity\TaskViewModel;
use App\Adapter\Presenter\JsonPresenter;
use App\Domain\Core\Service\UsecaseOutput\GetTaskOutput;
use Illuminate\Http\JsonResponse;
use Exception;

/**
 * Class GetTaskPresenter
 * @package App\Adapter\Presenter\Json
 */
class GetTaskPresenter extends JsonPresenter
{
    /**
     * @param GetTaskOutput $output
     * @return JsonResponse
     * @throws Exception
     */
    public function execute(GetTaskOutput $output): JsonResponse
    {
        return $this->jsonResponse(
            new TaskViewModel($output->getTask())
        );
    }
}
