<?php

namespace App\Http\Livewire\Chat;


use App\Models\chat;
use App\Models\User;
use Livewire\Component;

class ChatList extends Component
{
    public $auth_id;
    public $conversations;
    public $selectedConversation;
    public $receiverInstance;

    protected $listeners= ['chatUserSelected','refresh'=>'$refresh','resetComponent'];

    public function chatUserSelected(chat $conversation,$receiverId)
    {

        
     // dd($conversation,$receiverId);
     $this->selectedConversation= $conversation;
     $receiverInstance= User::find($receiverId);


           $this->emitTo('chat.chatbox','loadConversation', $this->selectedConversation,$receiverInstance);
           $this->emitTo('chat.send-message','updateSendMessage',$this->selectedConversation,$receiverInstance);

        # code...
    }


    public function getChatUserInstance(chat $conversation, $request)
    {
        # code...
        $this->auth_id = auth()->id();
        //get selected conversation 

        if ($conversation->from == $this->auth_id) {
            $this->receiverInstance = User::firstWhere('id', $conversation->to);
            # code...
        } else {
            $this->receiverInstance = User::firstWhere('id', $conversation->from);
        }

        if (isset($request)) {

            return $this->receiverInstance->$request;
            # code...
        }
    }

    public function mount()
    {
        $this->auth_id = auth()->id();
        $this->conversations = chat::where('from', $this->auth_id)
            ->orWhere('to', $this->auth_id)->orderBy('last_read_at', 'DESC')->get();
    }

    public function render()
    {
        return view('livewire.chat.chat-list');
    }
}
