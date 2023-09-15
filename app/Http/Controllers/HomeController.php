<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\job;
use App\Models\profil;
use App\Models\proposition;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /** 
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (auth()->user()->wasRecentlyCreated) {
            session()->flash('status', 'BIENVENUE SUR VOTRE TABLEAU DE BORD !');
        } else {
            session()->flash('status', 'BON RETOUR!');
        }

        $user = Auth::user();
        $prop = Proposition::all();
        $profil = null;
        $profils=Auth()->user()->profil;
        $jobs = Auth::user()->jobs;
        $props = Auth::user()->propositions;
        $job=job::all();

       
        $missionsV = job::whereHas('propositions', function ($query) {
            $query->where('valid_status', 1);
        })->count();

        if ($user->role->name === 'Recruteur') {
            // récupérer les données pour le recruteur
            return view('home', compact('jobs', 'job','prop','missionsV'));
        } elseif ($user->role->name === 'Freelance') {
            // récupérer les données pour le freelance
            $profil = Profil::where('user_id', $user->id)->first();
            return view('home', compact('props','job','prop','profil','profils','missionsV'));
        } elseif ($user->role->name === 'Artisan') {
            // récupérer les données pour l'artisan
            $profil = Profil::where('user_id', $user->id)->first();
            return view('home', compact('profil','profils'));
        }
    }
    

}
