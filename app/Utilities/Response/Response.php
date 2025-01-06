<?php

namespace App\Utilities\Response;

use Illuminate\Http\Response as JsonResponse;
use Symfony\Component\HttpFoundation\Response as HttpResponseCode;

class Response implements ResponseInterface
{

    public function paginate($data)
    {
        $data = $data->resource ?? $data;

        return response([
            'code' => HttpResponseCode::HTTP_OK,
            'data' => method_exists($data, 'items') ? $data->items() : $data,
            'meta' => [
                'current_page' => method_exists($data, 'currentPage') ? $data->currentPage() : null,
                'next_page' => method_exists($data, 'nextPageUrl') ? $data->nextPageUrl() : null,
                'last_page' => method_exists($data, 'lastPage') ? $data->lastPage() : null,
                'path' => method_exists($data, 'path') ? $data->path() : null,
                'total' => method_exists($data, 'total') ? $data->total() : null,
                'per_page' => method_exists($data, 'perPage') ? $data->perPage() : null,
            ]
        ], HttpResponseCode::HTTP_OK);
    }

    public function item($data): JsonResponse
    {
        return response([
            'code' => HttpResponseCode::HTTP_CREATED,
            'data' => $data
        ], HttpResponseCode::HTTP_CREATED);
    }
}
