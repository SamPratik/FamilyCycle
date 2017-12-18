@includeif('partials._header')

@includeif('answerer.partials._navbar')
{{-- @push('styles') --}}
<style media="screen">
    .message-thread-container {
        position: relative;
        top: 100px;
        color: black;
    }
</style>
{{-- @endpush --}}
<body>
    <div class="container message-thread-container">
        <div style="padding:0px 250px;">
            <h2 class="text-center">Messasges</h2>
            <div class="list-group">
                @foreach ($liveChats as $liveChat)
                    <a href="{{ route('answerer.fullMessage', $liveChat->user_id) }}" class="list-group-item">{{ $liveChat->user_id }}
                      <small class="pull-right">{{ $liveChat->updated_at }}</small>
                      <p style="clear:both;"></p>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</body>
