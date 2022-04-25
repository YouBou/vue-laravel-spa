<?php

namespace App\Adapter\Presenter;

use App\Adapter\Presenter\ViewModel\JsonViewModel;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\JsonResponse;
use Exception;

/**
 * Class JsonPresenter
 * @package App\Adapter\Presenter
 */
abstract class JsonPresenter
{
    /**
     * @param ResponseFactory $response
     */
    public function __construct(
        private readonly ResponseFactory $response
    ) {
    }

    /**
     * @param JsonViewModel|JsonViewModel[]|bool[]|int[]|float[]|string[]|null[]|bool|int|float|string|null $json
     * @return JsonResponse
     * @throws Exception
     */
    protected function jsonResponse($json = null): JsonResponse
    {
        $expandJsonViewModels = function ($item) use (&$expandJsonViewModels) {
            return match (true) {
                $item instanceof JsonViewModel => array_map($expandJsonViewModels, $item->toArray()),
                is_array($item) => array_map($expandJsonViewModels, $item),
                is_scalar($item) || is_null($item) => $item,
                default => throw new Exception("Response data type has to be one of [bool, int, float, string, null]")
            };
        };

        return $this->response
            ->json([
                'data' => $expandJsonViewModels($json),
            ])
            ->header('Content-type', 'application/json')
            ->header('charset', 'UTF-8');
    }
}
