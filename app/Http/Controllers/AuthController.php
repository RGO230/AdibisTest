<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Resources\User\UserResource;
use App\Services\AuthService;
use Illuminate\Http\JsonResponse;

class AuthController extends Controller
{
    public function __construct(
        private AuthService $service
    ) {}

    public function register(RegisterRequest $request): JsonResponse
    {
        $result = $this->service->register($request->validated());

        return response()->json([
            'user' => UserResource::make($result['user']),
            'token' => $result['token'],
        ], 201);
    }

    public function login(LoginRequest $request): JsonResponse
    {
        $result = $this->service->login($request->validated());

        return response()->json([
            'user' => UserResource::make($result['user']),
            'token' => $result['token'],
        ], 200);
    }
}

