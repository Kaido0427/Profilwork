<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class avis extends Model
{
    use HasFactory;

    protected $guarded =[];

    protected $fillable=[
        'contenu',
    ];

    public static function boot()
    {
        parent::boot();

        self::creating(function ($avi) {
        
            $avi->user()->associate(auth()->user()->id);
        });

    }




    public function user()
    {
        return $this->belongsto('App\Models\User');
    }

    public function profils()
    {
        return $this->belongsto('App\Models\profil');
    }

}
