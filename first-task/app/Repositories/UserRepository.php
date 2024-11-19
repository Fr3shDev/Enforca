<?php

namespace App\Repositories;

use App\Interfaces\UserRepositoryInterface;
use App\Models\User;

class UserRepository implements UserRepositoryInterface
{
    public function createUser($userDetails)
    {
        return User::create($userDetails);
    }

    public function findUser($id)
    {
        return User::findOrFail($id);
    }

    public function updateUser($userDetails,$id)
    {
        User::findOrFail($id)->update($userDetails);
        return User::findOrFail($id);
    }

    public function deleteUser($id)
    {
        return User::findOrFail($id)->delete();
    }

    // public function updatePassword(array $userDetails, $userId)
    // {
    //     User::findOrFail($userId)->update($userDetails);

    //     return User::findOrFail($userId);
    // }
}
