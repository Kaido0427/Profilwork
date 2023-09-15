<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\avis;
use App\Models\profil;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class Cavis extends Controller
{
    //



    public function store(profil $pf, avis $userId)
    {

        avis::find($userId);

        if (avis::where('user_id', $userId)) {
            // lorsque l'utilisateur a deja soumi une mission
            return redirect()->back()->with('error', 'Désolé, vous ne pouvez soumettre qu\'un avis par profil.');
        } else {
            // insérer le nouvel avis
            $validatedData = request()->validate([
                'contenu' => 'required|min:5',

            ]);

            if (Auth()->check()) {
                $avi = avis::create([
                    'contenu' => $validatedData['contenu'],


                ]);
            } else {
                $avi = avis::create([
                    'contenu' => $validatedData['contenu'],
                    'user_id' => null,
                    // L'utilisateur non connecté n'aura pas d'identifiant d'utilisateur
                ]);
            }

            $pf->avis()->save($avi);
        }



      
        return redirect()->back()->with('success', 'Nouvelle proposition');
    }
}
