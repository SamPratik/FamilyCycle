@extends('user.contacts.main')

@section('content')
<h2 class="text-center">Ambulance Lists</h2>

@foreach ($ambulanceLists as $ambulance)
  <div class="well">
      <strong><i class="fa fa-ambulance" aria-hidden="true"></i> {{ $ambulance->name }}</strong>
      <hr style="border:1px solid black;">
      <small><i class="fa fa-map-marker" aria-hidden="true"></i> {{ $ambulance->place }}</small><br>
      <small><i class="fa fa-phone" aria-hidden="true"></i> {{ $ambulance->phone }}</small>
  </div>
@endforeach

@endsection
