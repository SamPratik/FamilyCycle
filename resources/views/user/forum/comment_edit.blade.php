@extends('user.forum.main')

@push('scripts')
  <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
@endpush

@section('content')
  <div class="container" style="position:relative;top:100px;">
    <div class="row">
      <h2 class="text-center" style="color:black;">Edit Comment</h2>
      <div class="col-md-8 col-md-offset-2">
        @if ($errors->any())
          <div class="alert alert-danger">
              <p>{{ $errors->first('comment') }}</p>
          </div>
        @endif
        <form class="" action="{{ route('user.comments.update', $comment->id) }}" method="POST">
          {{ csrf_field() }}
          <input type="hidden" name="_method" value="PUT">
          <div class="form-group">
            <textarea name="comment" rows="3" cols="80">{{ $comment->comment }}</textarea>
          </div>
          <div class="form-group">
            <input class="btn btn-primary pull-right" type="submit" value="Save Changes">
          </div>
        </form>
      </div>
    </div>
  </div><br />
@endsection

@push('scripts')
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
@endpush
