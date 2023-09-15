<?php

namespace App\Http\Controllers;

use App\Models\chat;
use App\Models\job;
use App\Models\message;
use App\Models\profil;
use App\Models\proposition;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Cprop extends Controller
{

    //creer une proposition

    public function store(job $jb,proposition $userId)
    {

        proposition::find($userId);

        if (Proposition::where('user_id', $userId)->where('job_id', $jb->id)->exists()) {
            // le freelance a déjà soumis une proposition
            return redirect()->back()->with('error', 'Désolé, vous ne pouvez soumettre qu\'une proposition par offre d\'emploi.');
        } 
        else 
        {
            // insérer la nouvelle proposition dans la table
            request()->validate([
                'text_mot' => 'required|min:5',
                'cv' => 'bail',
                'prix' => 'required',
            ]);

            $prop = new proposition();
            $prop->text_mot = request('text_mot');
            $prop->cv = request('cv');
            $prop->prix = request('prix');

            $jb->propositions()->save($prop);
        }

        return redirect()->back()->with('success', 'Votre proposition a été soumise avec succès!');
    }


    //aller vers la page de modification----------------------------------
    public function edit(proposition $prop, $id)

    {

        $prop = proposition::find($id);
        return view('propositions.edit', compact('prop'));
    }

    //modifier une proposition------------------------------------
    public function update(Request $request, proposition $id)
    {
        $prop = proposition::find($id);
        $text_mot = $request->input('text_mot');
        $cv = $request->input('cv');
        $prix = $request->input('prix');


        DB::table('propositions')
            ->where('id', '=', $id->id)
            ->update([
                'text_mot' => $text_mot,
                'cv' => $cv,
                'prix' => $prix
            ]);

        return redirect()->route('jobs.index');
    }



    public function destroy($id)
    {
        $prop = proposition::destroy($id);

        return redirect()->route('jobs.index');
    }



    //---------------------------------------------------------------------
    //valider une proposition
    public function confirm(Request $request)
    {
        $prop = proposition::findOrFail($request->proposition);



        DB::table('propositions')
            ->where('id', '=', $prop->id)
            ->update([
                'valid_status' => 1,
            ]);

        $chat = chat::create([
            'from' => auth()->user()->id,
            'to' => $prop->user->id,
            'job_id' => $prop->job_id
        ]);

        message::create([
            'user_id' => auth()->user()->id,
            'chat_id' => $chat->id,
            'contenu' => 'Felicitation! J\'ai valider votre offre.',
        ]);

        return redirect()->route('conversations.index');
    }

      //recruter depuis le profil
      public function recruter(Request $request)
      {
          $profil = profil::findOrFail($request->profil);
  
  
  
          $chat = chat::create([
              'from' => auth()->user()->id,
              'to' => $profil->user->id,
              'job_id' => 1
          ]);
  
          message::create([
              'user_id' => auth()->user()->id,
              'chat_id' => $chat->id,
              'contenu' => 'Votre Profil M\'interresse et j\'aimerais discuter d\'un projet avec vous',
          ]);
  
          return view('conversations.index');
      }
}
