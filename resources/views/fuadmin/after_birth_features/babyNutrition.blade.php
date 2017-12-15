@extends('fuadmin.after_birth_features.main')
@section('updateButton')
    <a style="position:absolute;right:20px;" href="{{ route('fuadmin.edit.babyNutrition',$babyNutrition->id) }}" target="_blank" class="btn btn-primary">Update</a>
@endsection
@section('content')
    {!! $babyNutrition->content !!}
@endsection
