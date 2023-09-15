<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class compcat extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'compcat_id'
    ];

 

    public function competences()
    {
        return $this->hasMany('App\Models\compentece');
    }
}
