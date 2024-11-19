<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTalentRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Interfaces\TalentRepositoryInterface;
use App\Models\Talent;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;

class TalentController extends Controller
{
    public function __construct( protected TalentRepositoryInterface $talentRepository)
    {}

    public function index()
    {
        $talents = Talent::with(['user', 'job'])->get();
        return response($talents, 200);
    }

    public function store(StoreTalentRequest $request)
    {
        $validated = $request->validated();
        $talent = $this->talentRepository->createTalent($validated);
        return response($talent, 201);
    }

    public function show($id)
    {
        $talent = $this->talentRepository->findTalent($id);
        return response($talent, 200);
    }

    public function update(UpdateUserRequest $request,$id)
    {
        $validated = $request->validated();
        $talent = $this->talentRepository->updateTalent($validated, $id);
        return response()->json([
            'message' => 'Talent updated successfully',
            'talent' => $talent,
        ]);
    }
}
