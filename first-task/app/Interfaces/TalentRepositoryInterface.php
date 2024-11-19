<?php

namespace App\Interfaces;

interface TalentRepositoryInterface
{
    public function createTalent(array $details);

    public function findTalent(int $id);

    public function updateTalent(array $details, int $id);
}
