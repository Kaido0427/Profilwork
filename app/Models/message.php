<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class message extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'chat_id', 'contenu'];

    public static function boot()
    {
        parent::boot();

        self::creating(function ($msg) {
            if (request()->chat && !request()->routeIs('chats.*'))
            $msg->user()->associate(auth()->user()->id);
        });
      
    }

    public function chat()
    {
        return $this->belongsTo('App\Models\chat');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
