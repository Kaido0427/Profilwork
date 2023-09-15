<div>

@if ($selectedConversation)
    
<form wire:submit.prevent='sendMessage' action="">
    <div class="chatbox_footer">
        <div class="custom_form_group">

            <input wire:model='body' type="text" id="sendMessage" class="control" placeholder="Envoyer un Message...">
            <button type="submit" class="submit">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6" style="width: 15px !important; height: 15px !important;">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5" />
                </svg>
            </button>
        </div>

    </div>
</form>
@endif



</div>