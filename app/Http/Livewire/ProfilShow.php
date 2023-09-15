<?php

namespace App\Http\Livewire;

use App\Models\profil;
use Livewire\Component;

class ProfilShow extends Component
{

    public $profil;

    public function mount($id)
    {
        $this->profil = profil::findOrFail($id);
    }
    public function render()
    {
        
        return view('livewire.profil-show');
    }
}
