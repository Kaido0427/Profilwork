<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\message;
use App\Models\ReadBy;

class chat extends Model
{
    use HasFactory;
    protected $fillable = ['from', 'to', 'job_id'];



    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function messages()
    {
        return $this->hasMany('App\Models\message');
    }

    public function readMessages()
    {
        return $this->hasMany(Message::class)->whereNotNull('last_read_at');
    }

    public function job()
    {
        return $this->belongsTo('App\Models\job');
    }
    public function fromUser()
    {
        return $this->belongsTo(User::class, 'from');
    }

    public function toUser()
    {
        return $this->belongsTo(User::class, 'to');
    }

    
}
