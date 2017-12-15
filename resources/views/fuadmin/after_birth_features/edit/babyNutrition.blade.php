@extends('fuadmin.after_birth_features.main')
@section('contentHeader')
    <h2 class="text-center">Baby Nutrition</h2>
@endsection

@section('content')
    <form class="" action="{{ route('fuadmin.update.babyNutrition', $babyNutrition->id) }}" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT">
        <div class="form-group">
          <label for="comment">Edit:</label>
          <textarea name="content" class="form-control" rows="50" id="comment">{!! $babyNutrition->content !!}</textarea>
        </div>
        <div class="form-group">
          <input class="btn btn-success pull-right" type="submit" id="" value="Save Changes">
        </div><br>
    </form>
@endsection

@push('scripts')
	{{-- <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=3q5z432nr1paneatbtlt428ivmicf55vxaxnmwvz2jzq94it"></script> --}}
	<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
@endpush

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
