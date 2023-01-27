<?php

namespace App\Http\Controllers;

use App\Domain\Customer\Service\CustomerServiceInterface;
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
                    'message' => 'Internal error while trying to get list of customers.',
                ],
                Code::STATUS_INTERNAL_SERVER_ERROR
            );
        }
    }

    public function store(CustomerStoreRequest $request): JsonResponse
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
                    'message' => 'Internal error while trying to create new customer.',
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
                    'message' => 'Internal error while trying find customer by Id.',
                ],
                Code::STATUS_INTERNAL_SERVER_ERROR
            );
        }
    }

    public function update(CustomerUpdateRequest $request): JsonResponse
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
                    'message' => 'Internal error while trying to update customer.',
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
                    'message' => 'Internal error while trying to delete customer',
                ],
                Code::STATUS_INTERNAL_SERVER_ERROR
            );
        }
    }
}
