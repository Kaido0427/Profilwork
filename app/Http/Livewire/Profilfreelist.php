<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Profil; 

class Profilfreelist extends Component
{
    public function render()
    {
        // Récupere tous les profils ayant un user->role_id égal à 2
        $profils = Profil::whereHas('user', function ($query) {
            $query->where('role_id', 2);
        })->get();

        return view('livewire.profilfreelist', ['profils' => $profils]);
    }
}
