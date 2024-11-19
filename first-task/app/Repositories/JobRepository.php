<?php

namespace App\Repositories;

use App\Interfaces\JobRepositoryInterface;
use App\Models\Job;

class JobRepository implements JobRepositoryInterface
{
    public function createJob(array $details)
    {
        return Job::create($details);
    }

    public function findJob(int $id)
    {
        return Job::findOrFail($id);
    }

    public function updateJob(array $details, int $id)
    {
        Job::findOrFail($id)->update($details);
        return Job::findOrFail($id);
    }
}
