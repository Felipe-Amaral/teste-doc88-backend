<?php

namespace App\Http\Controllers;

use App\Domain\Product\Service\ProductServiceInterface;
use App\Http\Request\Product\ProductStoreRequest;
use App\Http\Request\Product\ProductUpdateRequest;
use Fig\Http\Message\StatusCodeInterface as Code;
use Illuminate\Http\JsonResponse;

class ProductController extends Controller
{
    private ProductServiceInterface $service;

    public function __construct(
        ProductServiceInterface $service
    ) {
        $this->service = $service;
    }

    public function index(): JsonResponse
    {
        try {
            return response()->json(
                [
                    'data' => $this->service->getList(),
                ],
                Code::STATUS_OK
            );
        } catch (\Exception $e) {
            return response()->json(
                [
                    'error' => true,
                    'message' => 'Internal error while trying to get list of Products.',
                ],
                Code::STATUS_INTERNAL_SERVER_ERROR
            );
        }
    }

    public function show(int $id): JsonResponse
    {
        return response()->json(
            [
                'data' => $this->service->findById($id)->toArray(),
            ],
            Code::STATUS_OK
        );
    }

    public function store(ProductStoreRequest $request): JsonResponse
    {
        try {
            return response()->json(
                [
                    'data' => $this->service->store($request),
                ],
                Code::STATUS_CREATED
            );
        } catch (\Exception $e) {
            return response()->json(
                [
                    'error' => true,
                    'message' => 'Internal error while trying to create new Product.',
                ],
                Code::STATUS_INTERNAL_SERVER_ERROR
            );
        }
    }

    public function update(ProductUpdateRequest $request, int $id): JsonResponse
    {
        try {
            return response()->json(
                [
                    'data' => $this->service->update($request, $id),
                ],
                Code::STATUS_OK
            );
        } catch (\Exception $e) {
            return response()->json(
                [
                    'error' => true,
                    'message' => 'Internal error while trying to update Product.',
                ],
                Code::STATUS_INTERNAL_SERVER_ERROR
            );
        }
    }

    public function destroy(int $id): JsonResponse
    {
        try {
            return response()->json(
                [
                    'data' => $this->service->delete($id),
                ],
                Code::STATUS_OK
            );
        } catch (\Exception $e) {
            return response()->json(
                [
                    'error' => true,
                    'message' => 'Internal error while trying to delete Product',
                ],
                Code::STATUS_INTERNAL_SERVER_ERROR
            );
        }
    }
}
