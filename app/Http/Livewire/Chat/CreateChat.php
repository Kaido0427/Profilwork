<?php

namespace App\Http\Livewire\Chat;

use Livewire\Component;
use App\Models\chat;
use App\Models\job;
use App\Models\message;
use App\Models\proposition;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CreateChat extends Component
{
    public $jb;
    public $prop;
    public $chat;

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(job $jb)
    {
       
        return view('jobs.show', compact('jb'));
    }
    //valider la proposition et genener un chat
    public function confirm(Request $request)
    {
        $prop = proposition::findOrFail($request->proposition);



        DB::table('propositions')
            ->where('id', '=', $prop->id)
            ->update([
                'valid_status' => 1,
            ]);

        $chat = chat::create([
            'from' => auth()->user()->id,
            'to' => $prop->user->id,
            'job_id' => $prop->job_id
        ]);

        message::create([
            'user_id' => auth()->user()->id,
            'chat_id' => $chat->id,
            'contenu' => 'Felicitation! J\'ai valider votre offre.',
        ]);

        return view('conversation.index', compact('chat'));
    }

    public function render()
    {

        return view('livewire.chat.create-chat');
    }
}
