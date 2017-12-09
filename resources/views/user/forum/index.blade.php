@extends('user.forum.main')
@push('styles')
<style media="screen">
  .comments {
    display: none;
  }
</style>
@endpush
@section('title', 'show posts')
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
@section('content')
  {{-- Comment Success Message --}}
  @if (session()->has('comment_success'))
    {!! "<script>alert('You have commented successfully!');</script>" !!}
  @endif

  <div class="container" style="position:relative;top:100px;">

    {{-- Post Form --}}
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        @if (session()->has('success'))
          <div class="alert alert-success">
            <strong>Success!</strong> {{ session('success') }}
          </div>
        @endif
        @if (session()->has('post_edit_success'))
          <div class="alert alert-success">
            <strong>Success!</strong> {{ session('post_edit_success') }}
          </div>
        @endif
        @if (session()->has('comment_edit_success'))
          <div class="alert alert-success">
            <strong>Success!</strong> {{ session('comment_edit_success') }}
          </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger">
                <p>{{ $errors->first('post') }}</p>
            </div>
        @endif
        @if (session()->has('post_delete_success'))
          <div class="alert alert-success">
            <strong>Success!</strong> {{ session('post_delete_success') }}
          </div>
        @endif
        @if (session()->has('comment_delete_success'))
          <div class="alert alert-success">
            <strong>Success!</strong> {{ session('comment_delete_success') }}
          </div>
        @endif
        @auth
          <form class="row" action="{{ route('user.posts.store') }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
              <label for="" style="color:#1abc9c;">Write post here:</label>
              <textarea class="form-control" name="post" rows="5" cols="80"></textarea>
            </div>
            <div class="form-group col-md-2 col-md-offset-5" style="margin-top:-5px;">
              <input class="btn btn-success btn-block" type="submit" name="submit" value="Post">
            </div>
          </form>
        @endauth
      </div>
    </div>

    @foreach ($posts as $post)
      {{-- Show A Post --}}
      <div class="row" style="padding:0px 200px; color:black;">
        <div class="media">
          <div class="media-left">
            <img src="https://www.gravatar.com/avatar/{{ md5( strtolower( trim( $post->user->email ) ) ) }}?d=monsterid" class="media-object" style="width:45px">
          </div>
          <div class="media-body" style="position:relative;">
            <h4 class="media-heading" style="color:#1abc9c;"><strong>{{ $post->user->name }}</strong> <small><i>Posted on {{ $post->created_at }}</i></small></h4>
            <p>{!! $post->post !!}</p>
            {{-- Settings Button For Post --}}
            @auth
              <span class="dropdown" style="position:absolute;top:0px;right:0px;z-index:1000;">
                @if ($post->user_id == Auth::user()->id)
                  <button class="btn btn-default dropdown-toggle btn-sm" type="button" data-toggle="dropdown">Settings
                  <span class="caret"></span></button>
                @endif
                <ul class="dropdown-menu dropdown-menu-right">
                  <li><a href="{{ route('user.posts.edit', ['id' => $post->id]) }}">Edit</a></li>
                  <li><a href="" onclick="event.preventDefault();document.getElementById('DeletePostForm').submit();">Delete</a></li>
                  <form id="DeletePostForm" action="{{ route('user.posts.destroy', $post->id) }}" method="POST" style="display:none;">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="DELETE">
                  </form>
                </ul>
              </span>
            @endauth
            <p class="text-center">
              <i style="cursor:pointer;" class="fa fa-chevron-down" title="Show Comments" aria-hidden="true" onclick="slideToggleComments({{$post->id}})"></i>
            </p>

            {{-- Show Comments --}}
            <div class="comments" id="comments{{$post->id}}" style="z-index:0;position:relative;">
              @foreach ($post->abcomments as $comment)
                <!-- Nested media object -->
                <div class="media" style="position:relative;">
                  {{-- Settings Button For Comment --}}
                  @auth
                    <span class="dropdown" style="position:absolute;top:0px;right:0px;z-index:1000;">
                      @if ($comment->user_id == Auth::user()->id)
                      <button class="btn btn-default dropdown-toggle btn-xs" type="button" data-toggle="dropdown">Settings
                      <span class="caret"></span></button>
                      @endif
                      <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="{{ route('user.comments.edit', $comment->id ) }}">Edit</a></li>
                        <li><a href="" onclick="event.preventDefault();document.getElementById('DeleteCommentForm').submit();">Delete {{$comment->id}}</a></li>
                        <form id="DeleteCommentForm" action="{{ route('user.comments.destroy', $comment->id) }}" method="POST" style="display:none;">
                          {{ csrf_field() }}
                          <input type="hidden" name="_method" value="DELETE">
                        </form>
                      </ul>
                    </span>
                  @endauth
                  <div class="media-left">
                    <img src="https://www.gravatar.com/avatar/{{ md5( strtolower( trim( $comment->user->email ) ) ) }}?d=monsterid" class="media-object" style="width:45px">
                  </div>
                  <div class="media-body">
                    <h4 class="media-heading">{{ $comment->user->name }} <small><i>Posted on {{ $comment->created_at }}</i></small></h4>
                    <p>{!! $comment->comment !!}</p>
                  </div>
                </div>
              @endforeach

              {{-- Comment Submit Form--}}
              @auth
                <form class="" action="{{ route('user.comments.store') }}" method="post">
                  {{ csrf_field() }}
                  <div class="form-group">
                    <label for=""></label>
                    <textarea name="comment" rows="2"></textarea>
                  </div>
                  <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                  <input type="hidden" name="post_id" value="{{ $post->id }}">
                  <div class="form-group">
                    <input class="btn btn-primary btn-xs pull-right" type="submit" name="submit" value="comment">
                  </div>
                </form>
              @endauth
            </div>

          </div>


        </div>
      </div><br><br>

    @endforeach
    </div>

    {{-- Including Live Chat --}}
    @include('partials._live_chat')

  <script>
    var editor_config = {
      path_absolute : "{{ URL::to('/') }}/",
      selector: "textarea",
      plugins: [
        "advlist autolink lists link image charmap print preview hr anchor pagebreak",
        "searchreplace wordcount visualblocks visualchars code fullscreen",
        "insertdatetime media nonbreaking save table contextmenu directionality",
        "emoticons template paste textcolor colorpicker textpattern"
      ],
      toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
      relative_urls: false,
      file_browser_callback : function(field_name, url, type, win) {
        var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
        var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

        var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
        if (type == 'image') {
          cmsURL = cmsURL + "&type=Images";
        } else {
          cmsURL = cmsURL + "&type=Files";
        }

        tinyMCE.activeEditor.windowManager.open({
          file : cmsURL,
          title : 'Filemanager',
          width : x * 0.8,
          height : y * 0.8,
          resizable : "yes",
          close_previous : "no"
        });
      }
    };

    tinymce.init(editor_config);
  </script>

  @push('scripts')
    <script>
      function slideToggleComments(p_id) {
        $("#comments" + p_id).slideToggle();
      }
    </script>
  @endpush
@endsection
