<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'receiver_mail',
        'status',
        'amount',
       
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
