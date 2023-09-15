<?php

namespace App\Http\Controllers;

use App\Models\profil;
use App\Models\compcat;
use App\Models\competence;
use App\Models\localite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfilController extends Controller
{
    public function create(){

        $user = auth()->user();
        if ($user->profil) {
            return redirect()->route('artisan.index')->with('warning', 'Vous avez déjà un profil!');
        }

        $compcats = compcat::all();

        return view('artisan.create', compact('compcats'));
    }

    public function index()
    {
        $profils= profil::all();
        $profils = profil::whereHas('user', function ($query) {
            $query->where('role_id', 3);
        })->get();
        return view('artisan.index', compact('profils'));
    }

    public function show($id){
        $profil = Profil::findOrFail($id);
        return view('artisan.show', compact('profil'));
        }

    public function edit(profil $profil,$id)
    {
       $profil=profil::find($id);
       $compcats=compcat::all();
       $competences=competence::all();
       $localites = localite::all();
     
        return view('artisan.edit', compact('profil','compcats','competences','localites'));
    }

    public function update(Request $request,profil $profil)
    {

        profil::find($profil);
        $nom = $request->input('nom');
        $prenom = $request->input('prenom');
        $date_nais = $request->input('date_nais');
        $contact = $request->input('contact');
        $description = $request->input('description');
        $competence_id = $request->input('competence_id');
        $localite_id = $request->input('localite_id');
       

        DB::table('profils')
            ->where('id', '=', $profil->id)
            ->update([
                'nom' => $nom,
                'prenom' => $prenom,
                'date_nais' => $date_nais,
                'contact' => $contact,
                'description' => $description,
                'competence_id'=>$competence_id,
                'localite_id'=>$localite_id,
            ]);

            return redirect()->route('Freelance.index')->with('success', 'Votre profil a été modifié avec succes');
    }
    

}
