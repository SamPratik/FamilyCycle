@extends('user.forum.main')

@section('title', 'show posts')
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
@section('content')
  <div class="container" style="position:relative;top:100px;">
    {{-- Post Form --}}
    <div class="row">
      <div class="col-md-8 col-md-offset-2">

        @if (session()->has('success'))
          <div class="alert alert-success">
            <strong>Success!</strong> {{ session('success') }}
          </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger">
                <p>{{ $errors->first('post') }}</p>
            </div>
        @endif

        <form class="row" action="{{ route('user.ab.posts.store') }}" method="post">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="" style="color:#1abc9c;">Write post here:</label>
            <textarea class="form-control" name="post" rows="5" cols="80"></textarea>
          </div>
          <div class="form-group col-md-2 col-md-offset-5" style="margin-top:-5px;">
            <input class="btn btn-success btn-block" type="submit" name="submit" value="Post">
          </div>
        </form>
      </div>
    </div>

    @foreach ($posts as $post)
      {{-- Show All Posts --}}
      <div class="row" style="padding:0px 200px; color:black;">
        <div class="media">
          <div class="media-left">
            <img src="https://www.gravatar.com/avatar/{{ md5( strtolower( trim( $post->user->email ) ) ) }}?d=monsterid" class="media-object" style="width:45px">
          </div>
          <div class="media-body">
            <h4 class="media-heading" style="color:#1abc9c;"><strong>{{ $post->user->name }}</strong> <small><i>Posted on {{ $post->created_at }}</i></small></h4>
            <p>{!! $post->post !!}</p>

            {{-- Show Comments --}}
            {{-- <div class=""> --}}

              @foreach ($post->abcomments as $comment)
                <!-- Nested media object -->
                <div class="media">
                  <div class="media-left">
                    <img src="https://www.gravatar.com/avatar/{{ md5( strtolower( trim( $comment->user->email ) ) ) }}?d=monsterid" class="media-object" style="width:45px">
                  </div>
                  <div class="media-body">
                    <h4 class="media-heading">{{ $comment->user->name }} <small><i>Posted on {{ $comment->created_at }}</i></small></h4>
                    <p>{{ $comment->comment }}</p>
                  </div>
                </div>
              @endforeach

            {{-- </div> --}}

            </div>


          </div>
        </div><br><br>

    @endforeach
    </div>

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
@endsection
