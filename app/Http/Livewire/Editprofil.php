<?php

namespace App\Http\Livewire;

use App\Models\competence;
use App\Models\profil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Editprofil extends Component
{


    public function update(Request $request, profil $profil)
    {
        $profil = profil::findOrFail($profil->id);

        $nom = $request->input('nom');
        $prenom = $request->input('prenom');
        $date_nais = $request->input('date_nais');
        $contact = $request->input('contact');
        $description = $request->input('description');
        $competence_id = $request->input('competence_id');
        $localite_id = $request->input('localite_id');



        $competence = competence::find($competence_id);

        if ($competence != null) {
            $competence->compcat;
        }

        DB::table('profils')
            ->where('id', '=', $profil->id)
            ->update([
                'nom' => $nom,
                'prenom' => $prenom,
                'date_nais' => $date_nais,
                'contact' => $contact,
                'description' => $description,
                'competence_id' => $competence_id,
                'localite_id' => $localite_id,
            ]);


        return redirect()->route('artisan.index')->with('success', 'Votre profil a été modifié avec succès');
    }
    public function render()
    {
        return view('livewire.editprofil');
    }
}
