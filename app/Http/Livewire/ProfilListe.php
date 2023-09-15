<?php

namespace App\Http\Livewire;

use App\Models\profil;
use Livewire\Component;
use Livewire\WithPagination;

class ProfilListe extends Component
{
    
    public $profils;

    public function render()
    {
        // Récupérez tous les profils ayant un user->role_id égal à Artisan et paginez-les
        $profils = profil::whereHas('user', function ($query) {
            $query->where('role_id', 3);
        });
        
        return view('livewire.profil-liste', ['profils' => $profils]);
    }
    
    

}
