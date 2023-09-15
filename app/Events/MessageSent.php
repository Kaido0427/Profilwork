<?php

namespace App\Events;

use App\Models\chat;
use App\Models\message;
use App\Models\User;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class MessageSent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $user;
    public $message;
    public $conversation;
  
    public function __construct(User $user,message $message,chat $conversation)
    {
        //

        $this->user=$user;
        $this->message=$message;
        $this->conversation=$conversation;
    }

    public function broadcastWith( )
    {

        return [
             'user_id'=>$this->user->id,
             'message'=>$this->message->id,
             'chat_id'=>$this->conversation->id,
             'receiver_id'=>$this->user->id,
             
        ];
        # code...
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        error_log($this->user);
        return [
            new PrivateChannel('chat.' .$this->user->id),
        ];
    }
}
