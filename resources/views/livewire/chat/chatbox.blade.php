<div>

    @if ($selectedConversation)
        <div class="chatbox_header">
            <div class="return">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6" style="width: 30px !important; height: 30px !important;">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                </svg>

            </div>

            <div class="img_container">
                <img src="{{ $receiverInstance->avatar }}" alt="">

            </div>
            <div class="name">
                {{ $receiverInstance->name }}
            </div>

            <div class="info">
                <div class="info_item">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6" style="width: 30px !important; height: 30px !important;">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                    </svg>

                </div>
                @if (Auth()->user()->role_id == 1)
                    <div class="info_item">
                        <form action="{{ route('payment') }}" method="POST">
                            @csrf

                            <button class="btn btn-secondary">
                                Payer
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-paypal" viewBox="0 0 16 16">
                                    <path
                                        d="M14.06 3.713c.12-1.071-.093-1.832-.702-2.526C12.628.356 11.312 0 9.626 0H4.734a.7.7 0 0 0-.691.59L2.005 13.509a.42.42 0 0 0 .415.486h2.756l-.202 1.28a.628.628 0 0 0 .62.726H8.14c.429 0 .793-.31.862-.731l.025-.13.48-3.043.03-.164.001-.007a.351.351 0 0 1 .348-.297h.38c1.266 0 2.425-.256 3.345-.91.379-.27.712-.603.993-1.005a4.942 4.942 0 0 0 .88-2.195c.242-1.246.13-2.356-.57-3.154a2.687 2.687 0 0 0-.76-.59l-.094-.061ZM6.543 8.82a.695.695 0 0 1 .321-.079H8.3c2.82 0 5.027-1.144 5.672-4.456l.003-.016c.217.124.4.27.548.438.546.623.679 1.535.45 2.71-.272 1.397-.866 2.307-1.663 2.874-.802.57-1.842.815-3.043.815h-.38a.873.873 0 0 0-.863.734l-.03.164-.48 3.043-.024.13-.001.004a.352.352 0 0 1-.348.296H5.595a.106.106 0 0 1-.105-.123l.208-1.32.845-5.214Z" />
                                </svg>
                            </button>
                        </form>
                    </div>
                @endif

            </div>
        </div>

        <div class="chatbox_body" style="background-color: #d9dde2">
            @foreach ($messages as $message)
                <div wire:key='{{ $message->id }}'
                    class="msg_body  {{ $message->user->id === auth()->user()->id ? 'msg_body_me' : 'msg_body_receiver' }}"
                    style="width:80%;max-width:80%;max-width:max-content">
                    {{ $message->contenu }}
                    <div class="msg_body_footer">
                        <div class="date">
                            {{ $message->created_at->format('m: i a') }}
                        </div>
                        <div class="read">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6"
                                style="width: 15px !important; height: 15px !important;">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>

                        </div>
                    </div>
                </div>
            @endforeach

            <script>
                let chatBoxBody = document.querySelector('.chatbox_body');
                chatBoxBody.addEventListener('scroll', function() {
                    let top = chatBoxBody.scrollTop;
                    if (top == 0) {
                        window.livewire.emit('loadmore');
                    }
                });
            </script>
            <script>
                window.addEventListener('updatedHeight', function(event) {

                    var oldHeight = event.detail.height;
                    var newHeight = document.querySelector('.chatbox_body').scrollHeight;

                    var scrollTop = newHeight - oldHeight;
                    document.querySelector('.chatbox_body').scrollTop = scrollTop;

                    window.livewire.emit('updateHeight', {
                        height: scrollTop
                    });

                });
            </script>


        </div>
    @else
        <div class="center-div" style="opacity: 50%">
            <img src="/icones/no-talk.png" alt="">
        </div>

    @endif

    <!--
   <script>
       window.addEventListener('rowChatToBottom', function() {
           var chatBoxBody = document.querySelector('.chatbox_body');
           chatBoxBody.scrollTop = chatBoxBody.scrollHeight;
       });
   </script>
    <script>
        document.addEventListener('click', function(event) {
            var target = event.target;
            if (target.classList.contains('return')) {
                window.livewire.emit('resetComponent');
            }
        });
    </script>

-->

</div>
