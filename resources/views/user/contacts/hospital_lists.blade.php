@extends('user.contacts.main')
@section('content')
  <h2 class="text-center"><strong>Hospital's Lists</strong></h2>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Name</th>
        <th>Place</th>
        <th>Phone</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
        @foreach ($hospitalLists as $hospital)
            <tr>
              <td>{{ $hospital->name }}</td>
              <td>{{ $hospital->place }}</td>
              <td>{{ $hospital->phone }}</td>
            </tr>
        @endforeach
    </tbody>
  </table>
@endsection
