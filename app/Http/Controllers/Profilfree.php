<?php

namespace App\Http\Controllers;

use App\Models\profil;
use App\Models\compcat;
use App\Models\competence;
use App\Models\localite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Profilfree extends Controller
{
    public function create(){

        $user = auth()->user();
        if ($user->profil) {
            return redirect()->route('Freelance.index')->with('warning', 'Vous avez déjà un profil!');
        }

        $compcats = compcat::all();

        return view('Freelance.create', compact('compcats'));
    }

    public function index()
    {
        $profils= profil::all();
        return view('Freelance.index', compact('profils'));
    }

    public function show($id){
        $profil = Profil::findOrFail($id);
        return view('Freelance.show', compact('profil'));
        }

    public function edit(profil $profil,$id)
    {
       $profil=profil::find($id);
       $compcats=compcat::all();
       $competences=competence::all();
       $localites = localite::all();
     
        return view('Freelance.edit', compact('profil','compcats','competences'));
    }

    public function update(Request $request,profil $profil)
    {

        profil::find($profil);
        $nom = $request->input('nom');
        $prenom = $request->input('prenom');
        $date_nais = $request->input('date_nais');
        $description = $request->input('description');
        $competence_id = $request->input('competence_id');
       

        DB::table('profils')
            ->where('id', '=', $profil->id)
            ->update([
                'nom' => $nom,
                'prenom' => $prenom,
                'date_nais' => $date_nais,
                'description' => $description,
                'competence_id'=>$competence_id,
            ]);

            return redirect()->route('Freelance.index')->with('success', 'Votre profil a été modifié avec succes');
    }
    

}
