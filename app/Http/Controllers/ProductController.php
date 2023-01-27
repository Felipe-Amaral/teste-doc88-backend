<?php

namespace App\Http\Controllers;

use App\Domain\Product\Service\ProductServiceInterface;
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
                    'message' => 'Internal error while trying to get list of products.',
                ],
                Code::STATUS_INTERNAL_SERVER_ERROR
            );
        }
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
                    'message' => 'Internal error while trying to create new product.',
                ],
                Code::STATUS_INTERNAL_SERVER_ERROR
            );
        }
    }

    public function show(int $id): JsonResponse
    {
        try {
            return response()->json(
                [
                    'data' => $this->service->show($id),
                ],
                Code::STATUS_OK
            );
        } catch (\Exception $e) {
            return response()->json(
                [
                    'error' => true,
                    'message' => 'Internal error while trying find product by Id.',
                ],
                Code::STATUS_INTERNAL_SERVER_ERROR
            );
        }
    }

    public function update(ProductUpdateRequest $request): JsonResponse
    {
        try {
            return response()->json(
                [
                    'data' => $this->service->update($request),
                ],
                Code::STATUS_OK
            );
        } catch (\Exception $e) {
            return response()->json(
                [
                    'error' => true,
                    'message' => 'Internal error while trying to update product.',
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
                    'data' => $this->service->destroy($id),
                ],
                Code::STATUS_OK
            );
        } catch (\Exception $e) {
            return response()->json(
                [
                    'error' => true,
                    'message' => 'Internal error while trying to delete product',
                ],
                Code::STATUS_INTERNAL_SERVER_ERROR
            );
        }
    }
}
