<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class localite extends Model
{
    protected $fillable=[
        'nom_loc',
        'nom_dep',
        'nom_ville',
        'localite_id'
    ];
    use HasFactory;

    public function Users()
    {
        return $this->hasMany('App\Models\User');
    }

    public function profil()
    {
        return $this->belongsTo('App\Models\profil');
    }
}
