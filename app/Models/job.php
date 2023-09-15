<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class job extends Model
{
    use HasFactory;

    protected $fillable=[
        'titre','description','image'
    ];

    public static function boot()
    {
        parent::boot();

        self::creating(function ($job) {
            if (request()->jobcat && !request()->routeIs('jobcats.*'))
                $job->jobcat()->associate(jobcat::find(request()->jobcat));
            $job->user()->associate(auth()->user()->id);
        });

        self::updating(function($job){
            $job->jobcat()->associate(request()->jobcat);
        });

      
    }
   

    public function jobcat()
    {
        return $this->belongsTo('App\Models\jobcat');
    }

    public function chat()
    {
        return $this->belongsTo('App\Models\chat');
    }
 

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function propositions()
    {
        return $this->hasMany('App\Models\proposition');
    }
}
