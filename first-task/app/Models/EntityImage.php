<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EntityImage extends Model
{
    use HasFactory;
    public $guarded = ['id'];

    public function imageable()
    {
        return $this->morphTo();
    }
}
