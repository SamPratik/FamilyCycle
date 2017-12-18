@includeif('partials._header')

@includeif('answerer.partials._navbar')
{{-- @push('styles') --}}
<style media="screen">
    .message-thread-container {
        position: relative;
        top: 100px;
        color: black;
    }

    .user-message {
        background-color: #ff8641;
        display: inline;
        float: left;
        clear: both;
        color: white;
        padding: 5px 10px;
        border-radius: 8px;
        box-shadow: 2px 2px 10px black;
    }

    .doctor-message {
        background-color: rgb(244, 247, 249);
        display: inline;
        float: right;
        clear: both;
        padding: 5px 10px;
        border-radius: 8px;
        box-shadow: -2px -2px 10px black;
    }

    .messages-container {
        height: 440px;
        overflow-y: scroll;
        padding: 0px 50px;
    }

    input {
        width: 100%;
    }
</style>
{{-- @endpush --}}
<body>
    <div class="container message-thread-container">
        <div style="padding:0px 200px;"><br>
            <h2 class="text-center">Full conversession with <strong>{{ $id }}</strong></h2>
            <br>
            <div class="messages-textarea-container">
                <div class="messages-container" id="messagesContainer">
                    @foreach ($chats as $chat)
                      @empty ($chat->answer)
                        <p class="user-message">{{ $chat->question }}</p>
                      @endempty
                      @empty ($chat->question)
                        <p class="doctor-message">{{ $chat->answer }}</p>
                      @endempty
                    @endforeach
                    {{-- <p class="user-message">This is a user message</p>
                    <p class="user-message">This is a user message</p>
                    <p class="doctor-message">This is a doctor message</p>
                    <p class="user-message">This is a user message</p>
                    <p class="doctor-message">This is a doctor message</p>
                    <p class="user-message">This is a user message</p>
                    <p class="user-message">This is a user message</p>
                    <p class="doctor-message">This is a doctor message</p>
                    <p class="user-message">This is a doctor message</p>
                    <p class="user-message">This is a user message</p>
                    <p class="user-message">This is a user message</p>
                    <p class="doctor-message">This is a doctor message</p>
                    <p class="user-message">This is a user message</p>
                    <p class="doctor-message">This is a doctor message</p>
                    <p class="user-message">This is a user message</p>
                    <p class="user-message">This is a user message</p>
                    <p class="doctor-message">This is a doctor message</p>
                    <p class="user-message">This is a doctor message</p> --}}
                    <p style="clear:both;"></p>
                </div>
                <form onsubmit="submitText(event,'{{ $id }}')" method="POST" id="chatForm">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input name="chat" style="height:80px;" type="text" class="form-control" id="" placeholder="Type your message here..." autocomplete="off">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<script>
  function submitText(event,id) {
    event.preventDefault();
    var token = $("input[name='_token']").val();
    var chat = $("input[name='chat']").val();
    // alert(token + '\n' + chat + '\n' + id);
    $.ajax({
      url: '{{ route('answerer.messageSubmit') }}',
      type: 'POST',
      data: {
        user_id: id,
        _token: token,
        chat: chat
      }
    })
    .done(function(data) {
      var elem = document.getElementById("messagesContainer");
      document.getElementById("chatForm").reset();
      elem.scrollTop = elem.scrollHeight;
      console.log(data);
    })
    .fail(function() {
      alert('Something went wrong!');
    });

  }

  $(document).ready(function() {
    setInterval(function() {
      $("#messagesContainer").load('{{ route('answerer.messageLoad', $id) }}');
    },1000);
  });
</script>
