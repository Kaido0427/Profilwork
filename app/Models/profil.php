<?php

namespace App\Models;

use Carbon\Carbon;
use App\Models\avis;
use App\Models\localite;
use App\Models\competence;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class profil extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom', 'prenom', 'date_nais', 'contact', 'description', 'user_id', 'competence_id', 'localite_id',
    ];
   

    protected $attributes = [
        'localite_id' => null,
    ];
    public static function boot()
    {
        parent::boot();

        self::creating(function ($comp) {
            if (request()->competence && !request()->routeIs('competences.*'))
                $comp->competence()->associate(competence::find(request()->competence));

                $comp->user()->associate(auth()->user()->id);
        });

        self::creating(function ($localite) {

                if (request()->localite && !request()->routeIs('localites.*'))
                $localite->localite()->associate(localite::find(request()->localite));

                $localite->user()->associate(auth()->user()->id);

        });

    }

    public function User()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function localite()
    {
        return $this->belongsTo('App\Models\localite');
    }


    public function competence()
    {
        return $this->belongsTo('App\Models\competence');
    }
    
    public function compcat()
    {
        return $this->belongsTo('App\Models\compcat');
    }

    public function avis()
    {
        return $this->hasMany('App\Models\avis');
    }

}
