@extends('fuadmin.after_birth_features.main')
@section('updateButton')
    <a style="position:absolute;right:20px;" href="{{ route('fuadmin.edit.motherNutrition',$motherNutrition->id) }}" target="_blank" class="btn btn-primary">Update</a>
@endsection
@section('content')
    {!! $motherNutrition->content !!}
@endsection
