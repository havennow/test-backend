<?php

namespace App\Http\Controllers\Api;

use App\Http\Controller\Contracts\ApiController;
use App\Http\Services\Characters as CharactersService;

/**
 * Class CharactersController
 * @package App\Http\Controllers\Api
 */
class CharactersController extends ApiController
{
    /**
     * @var CharactersService
     */
    private $charactersService;

    /**
     * CharactersController constructor.
     * @param CharactersService $charactersService
     */
    public function __construct(CharactersService $charactersService)
    {
        $this->charactersService = $charactersService;
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function all()
    {
        return response()->json($this->charactersService->getAll());
    }

    /**
     * @param $characterId
     * @return \Illuminate\Http\JsonResponse
     */
    public function getById($characterId)
    {
        $data = $this->charactersService->getById($characterId);

        if (empty($data)) {
            $error = $this->setError("getById", "error", "Not found", "v1/public/characters/{characterId}", "404");

            return response()->json($error, 404);
        }

        return response()->json($data, 200);
    }

    /**
     * @param $characterId
     * @return \Illuminate\Http\JsonResponse
     */
    public function comics($characterId)
    {
        $data = $this->charactersService->getComics($characterId);

        if (empty($data)) {
            $error = $this->setError("comics", "error", "Not found", "v1/public/characters/{characterId}/comics", "404");

            return response()->json($error, 404);
        }

        return response()->json($data, 200);
    }

    /**
     * @param $characterId
     * @return \Illuminate\Http\JsonResponse
     */
    public function events($characterId)
    {
        $data = $this->charactersService->getEvents($characterId);

        if (empty($data)) {
            $error = $this->setError("events", "error", "Not found", "v1/public/characters/{characterId}/events", "404");

            return response()->json($error, 404);
        }

        return response()->json($data, 200);
    }

    /**
     * @param $characterId
     * @return \Illuminate\Http\JsonResponse
     */
    public function series($characterId)
    {
        $data = $this->charactersService->getSeries($characterId);

        if (empty($data)) {
            $error = $this->setError("series", "error", "Not found", "v1/public/characters/{characterId}/series", "404");

            return response()->json($error, 404);
        }

        return response()->json($data, 200);
    }

    /**
     * @param $characterId
     * @return \Illuminate\Http\JsonResponse
     */
    public function stories($characterId)
    {
        $data = $this->charactersService->getStories($characterId);

        if (empty($data)) {
            $error = $this->setError("events", "error", "Not found", "v1/public/characters/{characterId}/events", "404");

            return response()->json($error, 404);
        }

        return response()->json($data, 200);
    }
}
