<?php

namespace App\Http\Livewire\Chat;

use App\Events\MessageRead;
use App\Models\chat;
use App\Models\message;
use App\Models\User;
use Livewire\Component;
use App\Events\MessageSent;

class Chatbox extends Component
{
    public $selectedConversation;
    public $receiverInstance;
    public $paginateVar = 10;
    public $messages;
    public $messages_count;

   // protected $listeners = ['loadConversation', 'pushMessage'];

    public function  getListeners()
    {

        $auth_id = auth()->user()->id;
        return [
            "echo-private:chat.{$auth_id},MessageSent" => 'broadcastedMessageReceived',
            "echo-private:chat.{$auth_id},MessageRead" => 'broadcastedMessageRead',
            'loadConversation', 'pushMessage', 'loadmore', 'updateHeight','broadcastMessageRead','resetComponent'
        ];
    }

    public function broadcastedMessageRead($event)
    {
        //dd($event);

        if($this->selectedConversation){



            if((int) $this->selectedConversation->id === (int) $event['chat_id']){

                $this->dispatchBrowserEvent('markMessageAsRead');
            }

        }

        # code...
    }

      /*---------------------------------------------------------------------------------------*/
    /*-----------------------------Broadcasted Event fucntion-------------------------------------------*/
    /*----------------------------------------------------------------------------*/

    function broadcastedMessageReceived($event)
    {
        ///here 
      $this->emitTo('chat.chat-list','refresh');
        # code...
        
        $broadcastedMessage = Message::find($event['message']);


        #check if any selected conversation is set 
        if ($this->selectedConversation) {
            #check if Auth/current selected conversation is same as broadcasted selecetedConversationgfg
            if ((int) $this->selectedConversation->id  === (int)$event['chat_id']) {
                # if true  mark message as read
                $broadcastedMessage->read = 1;
                $broadcastedMessage->save();
                $this->pushMessage($broadcastedMessage->id);
                // dd($event);

                $this->emitSelf('broadcastMessageRead');
            }
        }
    }

    public function broadcastMessageRead( )
    {
        broadcast(new MessageRead($this->selectedConversation->id, $this->receiverInstance->id));
        # code...
    }

    /*--------------------------------------------------*/
    /*------------------push message to chat--------------*/
    /*------------------------------------------------ */
  

    public function pushMessage($messageId)
    {
        $newMessage = message::find($messageId);
        $this->messages->push($newMessage);

        $this->dispatchBrowserEvent('rowChatToBottom');
    }

    public function loadConversation(chat $conversation, User $receiver)
    {
        // dd($conversation,$receiver);
        $this->selectedConversation = $conversation;
        $this->receiverInstance = $receiver;

        $this->messages_count = message::where('chat_id', $this->selectedConversation->id)->count();
        $this->messages = message::where('chat_id', $this->selectedConversation->id)
            ->skip($this->messages_count - $this->paginateVar)
            ->take($this->paginateVar)->get();

        $this->dispatchBrowserEvent('chatSelected');
    }
    public function render()
    {
        return view('livewire.chat.chatbox');
    }
}
