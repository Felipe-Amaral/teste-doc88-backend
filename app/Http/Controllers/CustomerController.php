<?php

namespace App\Http\Controllers;

use App\Domain\Customer\Service\CustomerServiceInterface;
use App\Http\Request\Customer\CustomerStoreRequest;
use App\Http\Request\Customer\CustomerUpdateRequest;
use Fig\Http\Message\StatusCodeInterface as Code;
use Illuminate\Http\JsonResponse;

class CustomerController extends Controller
{
    private CustomerServiceInterface $service;

    public function __construct(
        CustomerServiceInterface $service
    ) {
        $this->service = $service;
    }

    public function create(CustomerStoreRequest $request): JsonResponse
    {
        try {
            return response()->json(
                [
                    'data' => $this->service->create($request),
                ],
                Code::STATUS_CREATED
            );
        } catch (\Exception $e) {
            return response()->json(
                [
                    'error' => true,
                    'message' => 'Internal error while trying to create new customer.',
                ],
                Code::STATUS_INTERNAL_SERVER_ERROR
            );
        }
    }

    public function read(int $id): JsonResponse
    {
        try {
            return response()->json(
                [
                    'data' => $this->service->read($id)->toArray(),
                ],
                Code::STATUS_OK
            );
        } catch (\Exception $e) {
            return response()->json(
                [
                    'error' => true,
                    'message' => 'Internal error while trying to read a customer.',
                ],
                Code::STATUS_INTERNAL_SERVER_ERROR
            );
        }
    }

    public function update(CustomerUpdateRequest $request, int $id): JsonResponse
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
                    'message' => 'Internal error while trying to update customer.',
                ],
                Code::STATUS_INTERNAL_SERVER_ERROR
            );
        }
    }

    public function delete(int $id): JsonResponse
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
                    'message' => 'Internal error while trying to delete customer',
                ],
                Code::STATUS_INTERNAL_SERVER_ERROR
            );
        }
    }

    public function list(): JsonResponse
    {
        try {
            return response()->json(
                [
                    'data' => $this->service->list(),
                ],
                Code::STATUS_OK
            );
        } catch (\Exception $e) {
            return response()->json(
                [
                    'error' => true,
                    'message' => 'Internal error while trying to get list of customers.',
                ],
                Code::STATUS_INTERNAL_SERVER_ERROR
            );
        }
    }
}
