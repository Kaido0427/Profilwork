<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\avis;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar',
        'role_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];   

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role()
    {
        return $this->belongsTo('App\Models\role');
    }

    public function jobs()
    {
        return $this->hasMany('App\Models\job');
    }

    public function competence()
    {
        return $this->belongsTo('App\Models\competence');
    }

    public function propositions()
    {
        return $this->hasMany('App\Models\proposition');
    }

    public function profil()
    {
        return $this->belongsTo('App\Models\profil');
    }

    public function chats()
    {
        return $this->hasMany('App\Models\chat');
    }

    public function messages()
    {
        return $this->hasMany('App\Models\messages');
    }

    public function getChatsAtrribute()
    {
        return $this->chats()->get();
    }

    public function getAvatarAttribute($val)
    {
        if($val) {
            return asset('avatars/'.$val);
        } else {
            return asset('avatars/no-profil.png');
        }
    }
    

    public function localite()
    {
        return $this->belongsTo('App\Models\localite');
    }
      

    public function avis()
    {
        return $this->hasMany('App\Models\avis');
    }

    public function transactions()
    {
        return $this->hasMany('App\Models\transaction');
    }
  
}