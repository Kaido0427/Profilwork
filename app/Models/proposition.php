<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class proposition extends Model
{
    use HasFactory;
    protected $guarded =[];

    protected $fillable=[
        'text_mot','cv','prix',
    ];

    public static function boot()
    {
        parent::boot();

        self::creating(function ($prop) {
            if (request()->job && !request()->routeIs('jobs.*'))
                $prop->job()->associate(job::find(request()->job));
            $prop->user()->associate(auth()->user()->id);
        });

    }

      
    


public function user()
   {
    return $this->belongsto('App\Models\User');
   }

   public function job()
   {
    return $this->belongsto('App\Models\job');
   }

}
