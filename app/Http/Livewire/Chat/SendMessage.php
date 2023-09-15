<?php

namespace App\Http\Livewire\Chat;

use App\Events\MessageSent;
use App\Models\chat;
use App\Models\message;
use App\Models\User;
use Livewire\Component;

class SendMessage extends Component
{
    public $selectedConversation;
    public $receiverInstance;
    public $body;
    public $createdMessage;

    protected $listeners=['updateSendMessage','dispacthMessageSent'];

    public function updateSendMessage(chat $conversation,User $receiver)
    {
        $this->selectedConversation=$conversation;
        $this->receiverInstance=$receiver;

    }

    public function sendMessage()
    {
       
        if ($this->body == null) {
            return null;
        }

        $this->createdMessage = message::create([
            'chat_id' => $this->selectedConversation->id,
            'user_id' => auth()->id(),
            'contenu' => $this->body,

        ]);

        $this->selectedConversation->last_read_at = $this->createdMessage->created_at;
        $this->selectedConversation->save();
        $this->emitTo('chat.chatbox', 'pushMessage', $this->createdMessage->id);


        //reshresh coversation list 
        $this->emitTo('chat.chat-list', 'refresh');
        $this->reset('body');

        $this->emitSelf('dispatchMessageSent');
        // dd($this->body);
        # code..
    }

    public function dispatchMessageSent()
    {

        broadcast(new MessageSent(Auth()->user(), $this->createdMessage, $this->selectedConversation, $this->receiverInstance));
        # code...
    }

    public function render()
    {
        return view('livewire.chat.send-message');
    }
}
