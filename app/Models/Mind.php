<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mind extends Model
{
    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }
}
