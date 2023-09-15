<?php

namespace App\Http\Livewire;

use App\Models\compcat;
use App\Models\competence;
use App\Models\Profil;
use Livewire\Component;

class Workersearch extends Component
{
    public $search = '';
    public $selectedCategory = '';
    public $selectedCompetence = '';

    public function render()
    {
        $categories = compcat::all();
        $competences = competence::all();
        $users = [];

        if ($this->selectedCategory && $this->selectedCompetence) {
            $category = compcat::where('name', $this->selectedCategory)->first();
            if ($category) {
                $competence = competence::where('name', $this->selectedCompetence)
                    ->where('compcat_id', $category->id)
                    ->first();
                if ($competence) {
                    $users = Profil::where('competence_id', $competence->id)->get();
                }
            }
        } elseif ($this->selectedCategory) {
            $category = compcat::where('name', $this->selectedCategory)->first();
            if ($category) {
                $users = Profil::whereHas('competence', function ($query) use ($category) {
                    $query->where('compcat_id', $category->id);
                })->get();
            }
        } elseif ($this->selectedCompetence) {
            $competence = competence::where('name', $this->selectedCompetence)->first();
            if ($competence) {
                $users = Profil::where('competence_id', $competence->id)->get();
            }
        } elseif ($this->search) {
            $users = Profil::where('nom', 'like', '%' . $this->search . '%')
                ->orWhere('prenom', 'like', '%' . $this->search . '%')
                ->get();
        }

        return view('livewire.workersearch', [
            'categories' => $categories,
            'users' => $users,
            'competences'=>$competences
        ]);
    }


    public function search()
    {
        $this->reset();

        $users = [];

        if ($this->selectedCategory && $this->selectedCompetence) {
            $users = Profil::where('competence_id', $this->selectedCompetence)->get();
        } elseif ($this->selectedCategory) {
            $category = compcat::where('name', $this->selectedCategory)->first();
            if ($category) {
                $users = Profil::whereHas('competence', function ($query) use ($category) {
                    $query->where('compcat_id', $category->id);
                })->get();
            }
        } elseif ($this->selectedCompetence) {
            $competence = competence::where('name', $this->selectedCompetence)->first();
            if ($competence) {
                $users = Profil::where('competence_id', $competence->id)->get();
            }
        } elseif ($this->search) {
            $users = Profil::where('nom', 'like', '%' . $this->search . '%')
                ->orWhere('prenom', 'like', '%' . $this->search . '%')
                ->get();
        }

        $this->emit('searchUsers', $users);
    }
}
