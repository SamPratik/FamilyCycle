<style media="screen">
  .live-chat-starter {
    position: fixed;
    bottom: 0px;
    right: 20px;
    padding: 5px 70px;
    background-color: #ff8641;
    border-radius: 8px 8px 0px 0px;
    cursor: pointer;
    margin: 0px;
    z-index: 500;
  }

  .live-chat-box {
    position: fixed;
    bottom: 0px;
    right: 20px;
    height: 350px;
    background-color: white;
    z-index: 1000;
    width: 270px;
    border-radius: 8px 8px 0px 0px;
    display: none;
  }

  .live-chat-header {
    background-color: #ff8641;
    padding: 10px 0px;
    border-radius: 8px 8px 0px 0px;
  }

  .live-chat-header i {
    position: absolute;
    right:10px;
    top: 10px;
    cursor: pointer;
    color: white;
  }

  .live-chat-header i:hover {
    color: black;
  }

  .live-chat-form {
    position:absolute;
    bottom:0px;
    width: 100%;
  }

  .live-chat-input {
    width:100%;
    color: black;
    font-size: 12px;
    padding: 8px 5px;
  }

  .doctor-message {
    text-align: left;
    padding-left: 5px;
  }

  .doctor-message span {
    background-color: rgb(244, 247, 249);
    color: black;
    border-radius: 5px;
    padding:5px 5px;
  }

  .doctor-message img {
    width: 23px;
  }

  .user-message {
    text-align: right;
  }

  .user-message span {
    background-color: #ff8641;
    border-radius: 5px;
    padding:5px 5px;
    margin-right: 5px;
  }

  .live-chat-messages {
    height: 262px;
    overflow-y: scroll;
    position: relative;
  }

  .live-chat-messages p span {
    font-size: 12px;
  }
</style>
<p class="live-chat-starter text-center" onclick="document.getElementById('liveChatBox').style.display='block';">Live Chat</p>
<div class="live-chat-box" id="liveChatBox">
  <p class="text-center live-chat-header">Live Chat <i class="fa fa-times" aria-hidden="true" onclick="this.parentElement.parentElement.style.display='none';"></i></p>
  <div class="live-chat-messages">
    @foreach ($liveChats as $liveChat)
      @if (!empty($liveChat->answer))
        <p class="doctor-message">
          <img src="https://www.gravatar.com/avatar/{{ md5( strtolower( trim( 'pratik.anwar@gmail.com' ) ) ) }}?d=monsterid">
          <span>{{ $liveChat->answer }}</span>
        </p>
      @else
        <p class="user-message"><span>{{ $liveChat->question }}</span></p>
      @endif
    @endforeach
    {{-- <p class="doctor-message">
      <img src="https://www.gravatar.com/avatar/{{ md5( strtolower( trim( 'pratik.anwar@gmail.com' ) ) ) }}?d=monsterid">
      <span>This is a doctor messsage</span>
    </p>
    <p class="user-message"><span>This is a user messsage</span></p>
    <p class="user-message"><span>This is a user messsage</span></p>
    <p class="doctor-message">
      <img src="https://www.gravatar.com/avatar/{{ md5( strtolower( trim( 'pratik.anwar@gmail.com' ) ) ) }}?d=monsterid">
      <span>This is a doctor messsage</span>
    </p>
    <p class="user-message"><span>This is a user messsage</span></p>
    <p class="doctor-message">
      <img src="https://www.gravatar.com/avatar/{{ md5( strtolower( trim( 'pratik.anwar@gmail.com' ) ) ) }}?d=monsterid">
      <span>This is a doctor messsage</span>
    </p>
    <p class="doctor-message">
      <img src="https://www.gravatar.com/avatar/{{ md5( strtolower( trim( 'pratik.anwar@gmail.com' ) ) ) }}?d=monsterid">
      <span>This is a doctor messsage</span>
    </p>
    <p class="doctor-message">
      <img src="https://www.gravatar.com/avatar/{{ md5( strtolower( trim( 'pratik.anwar@gmail.com' ) ) ) }}?d=monsterid">
      <span>This is a doctor messsage</span>
    </p>
    <p class="user-message"><span>This is a user messsage</span></p>
    <p class="user-message"><span>This is a user messsage</span></p>
    <p class="doctor-message">
      <img src="https://www.gravatar.com/avatar/{{ md5( strtolower( trim( 'pratik.anwar@gmail.com' ) ) ) }}?d=monsterid">
      <span>This is a doctor messsage</span>
    </p> --}}
  </div>
  <form id="liveChatForm" class="live-chat-form" method="post" onsubmit="questionSubmit();">
    {{ csrf_field() }}
    <input class="live-chat-input" type="text" name="live_chat" value="" placeholder="Type your message here">
  </form>
</div>

<script type="text/javascript">
  function questionSubmit() {
    event.preventDefault();
    var question = $("input[name='live_chat']").val();
    var token = $("input[name='_token']").val();
    $.ajax({
      url: '{{ route('user.live_chat.store') }}',         // user/live_chat   
      type: 'POST',
      data: {
        question: question,
        _token: token
      }
    })
    .done(function(data) {
      console.log(data);
    })
    .fail(function() {
      console.log("error");
    })
    .always(function() {
      document.getElementById('liveChatForm').reset();
    });
  }

</script>
