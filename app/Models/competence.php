<?php

namespace App\Models;

use App\Models\compcat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class competence extends Model
{
       use HasFactory;
    protected $fillable=[
        'name',
        'competence_id'
    ];


public static function boot ()
{
  parent::boot();
  self::creating(function ($compcat) {
        

    if (request()->compcat && !request()->routeIs('compcats.*'))
    $compcat->compcat()->associate(compcat::find(request()->compcat));

    $compcat->user()->associate(auth()->user()->id);

});
}


    use HasFactory;

    public function compcact()
    {
        return $this->belongsTo('App\Models\compcat');
    }

    public function profils()
    {
        return $this->hasMany('App\Models\profil');
    }

    public function Users()
    {
        return $this->hasMany('App\Models\User');
    }
}
