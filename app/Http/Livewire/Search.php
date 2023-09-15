<?php

namespace App\Http\Livewire;

use App\Models\job;
use Livewire\Component;

class Search extends Component
{
    public string $query = '';

    public $jobs = [];


    //fonction qui  recherche une misson dans la base de données et affiche son titre dans un drop-down menu bootstrap
    public function updatedQuery()
    {
        

        $words = '%' . $this->query . '%';

        if (strlen($this->query) >= 2) {
            $this->jobs = job::where('titre', 'like', $words)->get()->toArray();
        }
    }
    public function render()
    {
        return view('livewire.search', [
            'jobs' => $this->jobs
        ]);
    }
}
