<?php

namespace App\Http\Livewire;

use App\Models\compcat;
use App\Models\competence;
use App\Models\localite;
use App\Models\profil;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class CreateProfil extends Component
{
    public $step = 1;

    public $user_id, $nom, $prenom, $date_nais;
    public $contact, $competence_id, $compcat_id;
    public $localite_id, $description;


    public function render()
    {
        $localites = localite::all();
        $competences = competence::all();
        $compcats = compcat::all();

        return view('livewire.create-profil', compact('localites', 'competences', 'compcats'));
    }

    public function updatedCompcatId($value)
    {
        $this->competence_id = Competence::where('compcat_id', $value)->pluck('id')->toArray();
    }

    public function back()
    {
        $this->resetErrorBag();
        $this->step--;

        if ($this->step < 1) {
            $this->step = 1;
        }
    }

    public function submitStep1()
    {
        $validatedData = Validator::make(
            [
                'nom' => $this->nom,
                'prenom' => $this->prenom,
                'date_nais' => $this->date_nais,
            ],
            [
                'nom' => 'required',
                'prenom' => 'required',
                'date_nais' => 'required|date_format:Y-m-d',
            ]
        )->validate();

        $this->step = 2;
    }

    public function submitStep2()
    {
        $validatedData = Validator::make(
            [
                'contact' => $this->contact,
                'competence_id' => $this->competence_id,
                'compcat_id' => $this->compcat_id,
            ],
            [
                'contact' => 'numeric',
                'competence_id' => 'required|exists:competences,id,compcat_id,' . $this->compcat_id,
                'compcat_id' => 'required|exists:compcats,id',
            ]
        )->validate();

        $this->step = 3;
    }


    public function submitStep3()
    {
      

        $validatedData = Validator::make(
            [
                'localite_id' => $this->localite_id,
                'description' => $this->description,
            ],
            [
                'localite_id' =>  'exists:localites,id',
                'description' => 'required|string',
            ]
        )->validate();

        $profils = profil::create([
            'nom' => $this->nom,
            'prenom' => $this->prenom,
            'date_nais' => $this->date_nais,
            'contact'=>$this->contact,
            'description' => $this->description,
            'localite_id' => $this->localite_id,
            'user_id' => $this->user_id,
            'competence_id' => implode(',', $this->competence_id),

        ]);

        $competence = Competence::find($this->competence_id);
       
            $competence->compcat_id = $this->compcat_id;
        
        $localite = localite::where('id', $this->localite_id)->first();

        Log::debug('localite: ' . $localite->id);


        $localite->save();


        $this->reset(['nom', 'prenom', 'date_nais','contact', 'description', 'localite_id', 'competence_id', 'compcat_id']);
        $this->step = 1;
        $this->dispatchBrowserEvent('profil-created', ['message' => 'Profil créé avec succès !']);
        
        return redirect()->route('home');

    }

  
}
