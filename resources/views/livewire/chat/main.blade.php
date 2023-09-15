<div>
    <div class="chat_container">

        <div class="chat_list_container">

            @livewire('chat.chat-list')

        </div>

        <div class="chat_box_container">

            @livewire('chat.chatbox')

            @livewire('chat.send-message')
        </div>
    </div>
    <!--
 <script>
     window.addEventListener('chatSelected', event => {

         if (window.innerWidth < 768) {

             document.querySelector('.chat_list_container').style.display = 'none';
             document.querySelector('.chat_box_container').style.display = 'block';

         }

         document.querySelector('.chatbox_body').scrollTop = document.querySelector('.chatbox_body')
             .scrollHeight;

         let height = document.querySelector('.chatbox_body').scrollHeight;
         window.livewire.emit('updateHeight', {
             height: height,
         });
     });

     window.addEventListener('resize', function() {

         if (window.innerWidth > 768) {
             document.querySelector('.chat_list_container').style.display = 'block';
             document.querySelector('.chat_box_container').style.display = 'block';
         }

     });

     document.addEventListener('click', function(event) {

         if (event.target.classList.contains('return')) {
             document.querySelector('.chat_list_container').style.display = 'block';
             document.querySelector('.chat_box_container').style.display = 'none';
         }

     });
 </script>
    <script>
        let chatBody = document.getElementById('chatBody');

        chatBody.addEventListener('scroll', function() {
            let top = chatBody.scrollTop;
            if (top == 0) {
                window.livewire.emit('loadmore');
            }
        });
    </script>
-->


</div>
