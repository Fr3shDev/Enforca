<?php

namespace App\Interfaces;

interface JobRepositoryInterface
{
    public function createJob(array $details);

    public function findJob(int $id);

    public function updateJob(array $details, int $id);
}
