<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Job extends Model
{
    use HasFactory;
    public $guarded = ['id'];

    public function talents(): HasMany
    {
        return $this->hasMany(Talent::class);
    }
}
