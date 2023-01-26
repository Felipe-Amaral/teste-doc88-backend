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
                    'message' => 'Internal error while trying to get list of customers',
                ],
                Code::STATUS_INTERNAL_SERVER_ERROR
            );
        }
    }
}
