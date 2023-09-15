<?php
namespace App\Http\Livewire;

use App\Models\Message;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;
use Livewire\WithFileUploads;

class Chat extends Component
{
    use AuthorizesRequests, WithFileUploads;

    public $chat;
    public $message;
    public $fichier;

    protected $listeners = ['sent' => '$refresh'];

    public function sendMessage()
    {
        $validatedData = $this->validate([
            'message' => 'required_without:fichier',
            'fichier' => 'required_without:message|file',
        ]);
    
        if ($this->checkSpam() || $this->fichier) {
            $data = [
                'user_id' => auth()->user()->id,
                'chat_id' => $this->chat->id,
                'fichier' => $this->fichier ? $this->fichier->store('messages') : null,
                'contenu' => $this->message ?? null,
            ];
            Message::create($data);
            $this->reset(['message', 'fichier']);
            $this->emit('sent');
        }
    }
    
    

    private function checkSpam()
    {
        $response = Message::whereBetween('created_at', [\Carbon\Carbon::now()->subMinutes(1)->toDateTimeString(), \Carbon\Carbon::now()])->where('user_id', auth()->user()->id)->get();

        if (!$response->isEmpty()) {
            $this->emit('flash-message', 'Vous ne pouvez pas poster plus d\'un message par minute', 'warning');
            return false;
        } else {
            return true;
        }
    }

    public function render()
    {
        return view('livewire.chat');
    }
}
