<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Interfaces\UserRepositoryInterface;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct( protected UserRepositoryInterface $userRepository)
    {}

    public function index()
    {
        $users = User::all();
        return response($users, 200);
    }

    public function store(StoreUserRequest $request)
    {
        $validated = $request->validated();
        $user = $this->userRepository->createUser($validated);
        return response($user, 201);
    }

    public function show($id)
    {
        $user = $this->userRepository->findUser($id);
        return response($user, 200);
    }

    public function update(UpdateUserRequest $request,$id)
    {
        $validated = $request->validated();
        $user = $this->userRepository->updateUser($validated, $id);
        return response()->json([
            'message' => 'User updated successfully',
            'user' => $user,
        ], 200);
    }

    public function delete($id)
    {
        $this->userRepository->deleteUser($id);
        return response()->json(['message' => 'User deleted successfully'], 200);
    }
}
