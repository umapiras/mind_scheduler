<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Schedule extends Model
{
    use SoftDeletes;
    
    protected $fillable=[
        'content',
        'start_date_time',
        'end_date_time',
        'diary',
        'mind_id'
    ];

    public function mind()
    {
        return $this->belongsTo(Mind::class);
    }
}
