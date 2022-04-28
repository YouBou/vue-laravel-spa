<?php

namespace App\Adapter\Presenter\Json;

use App\Adapter\Presenter\JsonPresenter;
use App\Domain\Core\Service\UsecaseOutput\PostTaskOutput;
use Illuminate\Http\JsonResponse;
use Exception;

/**
 * Class PostTaskPresenter
 * @package App\Adapter\Presenter\Json
 */
class PostTaskPresenter extends JsonPresenter
{
    /**
     * @param PostTaskOutput $output
     * @return JsonResponse
     * @throws Exception
     */
    public function execute(PostTaskOutput $output): JsonResponse
    {
        return $this->jsonResponse(
            [
                "taskId" => $output->getTaskId()->value()
            ]
        );
    }
}
