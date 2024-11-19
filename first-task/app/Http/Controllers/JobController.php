<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreJobRequest;
use App\Http\Requests\UpdateJobRequest;
use App\Interfaces\JobRepositoryInterface;
use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function __construct( protected JobRepositoryInterface $jobRepository)
    {}

    public function index()
    {
        $jobs = Job::with('talents')->get();
        return response($jobs, 200);
    }

    public function store(StoreJobRequest $request)
    {
        $validated = $request->validated();
        $job = $this->jobRepository->createJob($validated);
        return response($job, 201);
    }

    public function show($id)
    {
        $job = $this->jobRepository->findJob($id);
        return response($job, 200);
    }

    public function update(UpdateJobRequest $request, $id)
    {
        $validated = $request->validated();
        $job = $this->jobRepository->updateJob($validated, $id);
        return response($job, 200);
    }
}
