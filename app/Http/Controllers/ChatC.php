<?php

namespace App\Http\Controllers;

use App\Models\chat;
use App\Models\message;


class ChatC extends Controller
{

    public function index()
    {

        $chats = chat::with(['messages' => function ($query) {
            $query->latest()->first();
        }])
            ->where('from', auth()->id())
            ->orWhere('to', auth()->id())
            ->orderBy('updated_at', 'desc')
            ->get();

        return view('chats.index', [
            'chats' => $chats,
        ]);
    }

    public function show($chat)
    {
        if (!$chat) {
            abort(404);
        }
        $chat = Chat::find(request()->id);
        $msg = Message::find(request()->id);

        return view('chats.show', compact('chat', 'msg'));
    }
}
