<div>
    {{-- Care about people's approval and you will be their prisoner. --}}

    <div class="chatlist_header">

        <div class="title">
            Chat
        </div>

        <div class="img_container">
            <img src="{{Auth()->user()->avatar}}" alt="">
        </div>
    </div>

    <div class="chatlist_body">
        @if (count($conversations) > 0)
            @foreach ($conversations as $conversation)
                <div class="chatlist_item " wire:key='{{$conversation->id}}' wire:click="$emit('chatUserSelected', {{$conversation}},{{$this->getChatUserInstance($conversation, $name = 'id') }})">
                    <div class="chatlist_img_container">

                        <img src="{{ $conversation->from == auth()->user()->id ? $conversation->toUser->avatar : $conversation->fromUser->avatar }}"
                            alt="">
                    </div>

                    <div class="chatlist_info">
                        <div class="top_row">
                            <div class="list_username">
                                @if ($conversation->from == auth()->user()->id)
                                    <h5>{{ $conversation->toUser->name }}</h5>
                                @elseif ($conversation->to == auth()->user()->id)
                                    <h5>{{ $conversation->fromUser->name }}</h5>
                                @endif

                            </div>
                            <span class="date">
                                {{ $conversation->messages->last()?->created_at->shortAbsoluteDiffForHumans() }}
                            </span>
                        </div>

                        <div class="bottom_row">

                            <div class="message_body text-truncate">
                                {{ $conversation->messages->last()->contenu }}
                            </div>

                            <div class="unread_count badge rounded-pill text-light bg-danger"></div>



                        </div>
                    </div>
                </div>
            @endforeach
        @else
            Pas de conversations
        @endif




    </div>
</div>
