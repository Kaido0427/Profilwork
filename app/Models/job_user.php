<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class job_user extends Model
{
    use HasFactory;

    public function job()
    {
        return $this->belongsTo('App\Models\job');
    }
}
