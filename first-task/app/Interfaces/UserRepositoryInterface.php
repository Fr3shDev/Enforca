<?php

namespace App\Interfaces;

interface UserRepositoryInterface
{
    public function createUser(array $details);

    public function findUser(int $id);

    public function updateUser(array $details, int $id);

    public function deleteUser(int $id);

    // public function updatePassword(array $details, $userId);
}
