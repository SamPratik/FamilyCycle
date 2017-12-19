@extends('user.after_birth_features.main')

@push('styles')
  <style media="screen">
      .nav-pills a {
        font-size: 16px;
      }
  </style>
@endpush

@section('content')
<h2 class="text-center">Calcualtors</h2>

<ul class="nav nav-pills nav-justified">
  <li class="active"><a data-toggle="pill" href="#home">BMI</a></li>
  <li><a data-toggle="pill" href="#menu1">BMR</a></li>
  <li><a data-toggle="pill" href="#menu2">Caloric Needs</a></li>
  <li><a data-toggle="pill" href="#menu3">Nutritional Needs</a></li>
  <li><a data-toggle="pill" href="#menu4">Ideal Weight</a></li>
</ul>

<div class="tab-content">
  <div id="home" class="tab-pane fade in active">
    <h3>Body Mass Index</h3><br>
    @includeif('partials._bmi')
  </div>
  <div id="menu1" class="tab-pane fade">
    <h3>Basal Metabolic Rate</h3>
    @includeif('partials._bmr')
  </div>
  <div id="menu2" class="tab-pane fade">
    <h3>Caloric Needs</h3>
    @includeif('partials._caloric')
  </div>
  <div id="menu3" class="tab-pane fade">
    <h3>Calculate Your Nutritional Needs</h3>
    @includeif('partials._nutritional_needs')
  </div>
  <div id="menu4" class="tab-pane fade">
    <h3>Ideal Weight</h3>
    @includeif('partials._ideal_weights')
  </div>
</div>
@endsection
