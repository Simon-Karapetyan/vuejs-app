<?php

namespace App\Http\Controllers\Api;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller as BaseController;

class BaseApiController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    protected function handleSuccess($result, $msg, $code = 200): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data'    => $result,
            'message' => $msg,
        ], $code);
    }

    protected function handleFailure($error, $errorMsg = [], $code = 404): JsonResponse
    {
        return response()->json([
            'success' => false,
            'data' => !empty($errorMsg) ? $errorMsg : null,
            'message' => $error,
        ], $code);
    }
}
