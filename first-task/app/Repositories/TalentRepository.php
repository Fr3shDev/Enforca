<?php

namespace App\Repositories;

use App\Models\Talent;

class TalentRepository
{
    public function createTalent(array $details)
    {
        return Talent::create($details);
    }

    public function findTalent(int $id)
    {
        return Talent::find($id);
    }

    public function updateTalent(array $details, int $id)
    {
        Talent::findOrFail($id)->update($details);
        return Talent::findOrFail($id);
    }
}
